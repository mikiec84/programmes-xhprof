import os
import re
import subprocess
import time

class ProfilerSetup:
    def __init__(self, appRootPath, nginxConfigFile):
        self.appRootPath = os.path.abspath(appRootPath)
        self.nginxConfigFile = os.path.abspath(nginxConfigFile)
        self.xhprofPath = os.path.abspath(self.appRootPath + '/vendor/bbc/programmes-xhprof')
        self.mariadbProcess = False

    def centos6DbConfig(self):
        print 'Setting up MySQL'
        subprocess.call(['cp', self.xhprofPath + '/script/files/mysql.cnf', '/etc/my.cnf'])
        subprocess.call(['service', 'mysqld', 'start'])
        time.sleep(10)
        subprocess.call("mysql -u root < " + self.xhprofPath + "/script/files/xhprof_user_setup.sql", shell=True)
        subprocess.call(['chkconfig', 'mysqld', 'on'])

    def centos7DbConfig(self):
        print 'Setting up MariaDB'
        subprocess.call(['cp', self.xhprofPath + '/script/files/mariadb.cnf', '/etc/my.cnf'])
        subprocess.call(['/bin/mysql_install_db'])
        self.mariadbProcess = subprocess.Popen(
            [
                '/usr/libexec/mysqld',
                '--basedir=/usr',
                '--datadir=/var/lib/mysql',
                '--plugin-dir=/usr/lib64/mysql/plugin',
                '--log-error=/var/log/mariadb/mariadb.log',
                '--pid-file=/var/run/mariadb/mariadb.pid',
                '--socket=/var/lib/mysql/mysql.sock',
                '--port=3307',
                '--bind-address=127.0.0.1'
            ],
            stdout=subprocess.PIPE
        )
        time.sleep(10)
        subprocess.call("mysql -u root < " + self.xhprofPath + "/script/files/xhprof_user_setup.sql", shell=True)
        subprocess.call(['systemctl', 'enable', 'mariadb.service'])

    def nginxConfig(self):
        print 'Updating nginx conf file'
        nginxConfigContents = open(self.nginxConfigFile).read()
        nginxConfig = re.sub(r'(\s+)index(.*?);', r'\1index\2 index.php;', nginxConfigContents)

        with open(self.nginxConfigFile, 'w') as config_file:
            config_file.write(nginxConfig)

    def disableAwsLogs(self):
        print 'Disabling AWS Logs'
        subprocess.call(['rm', '-f', '/var/awslogs/etc/awslogs.conf'])

    def linkToWebFolder(self):
        print 'Linking GUI to web folder'
        subprocess.call(['ln', '-s', self.xhprofPath + '/preinheimer/xhprof', self.appRootPath + '/web'])

    def stopMariadb(self):
        if self.mariadbProcess:
            self.mariadbProcess.terminate()