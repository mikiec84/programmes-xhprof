<?php

namespace Jns\Bundle\XhprofBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * @ORM\Entity
 * @ORM\Table(name="details")
 */
class XhprofDetail
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="string", unique=true, length=17, nullable=false)
     * @ORM\Id
     */
    protected $id;

    /**
     * @var string $url
     * @ORM\Column(name="url", type="string", length=255, nullable=true)
     */
    protected $url;

    /**
     * @var string $canonicalUrl
     * @ORM\Column(name="c_url", type="string", length=255, nullable=true)
     */
    protected $canonicalUrl;

    /**
     * @var string $serverName
     * @ORM\Column(name="`server name`", type="string", length=64, nullable=true)
     */
    protected $serverName;

    /**
     * @var string $type
     * @ORM\Column(name="type", type="integer", nullable=true)
     */
    protected $type;

    /**
     * @var mixed $perfData
     * @ORM\Column(name="perfdata", type="blob", nullable=true)
     */
    protected $perfData;

    /**
     * @var mixed $cookie
     * @ORM\Column(name="cookie", type="blob", nullable=true)
     */
    protected $cookie;

    /**
     * @var mixed $post
     * @ORM\Column(name="post", type="blob", nullable=true)
     */
    protected $post;

    /**
     * There's a little hack here with the back ticks to get the word
     * 'get' to work as a column name
     *
     * @var int $get
     * @ORM\Column(name="`get`", type="blob", nullable=true)
     */
    protected $get;

    /**
     * @var int $pmu
     * @ORM\Column(name="pmu", type="integer", nullable=true)
     */
    protected $pmu;

    /**
     * @var int $wt
     * @ORM\Column(name="wt", type="integer", nullable=true)
     */
    protected $wt;

    /**
     * @var int $cpu
     * @ORM\Column(name="cpu", type="integer", nullable=true)
     */
    protected $cpu;

    /**
     * @var int $serverId
     * @ORM\Column(name="server_id", type="string", length=64, nullable=false)
     */
    protected $serverId;

    /**
     * @var string $aggregateCallsInclude
     * @ORM\Column(name="aggregateCalls_include", type="string", length=255, nullable=true)
     */
    protected $aggregateCallsInclude;

    /**
     * @var \DateTime
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(type="datetime")
     */
    protected $timestamp;

    /**
     * Get id.
     *
     * @return id.
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set id.
     *
     * @param id the value to set.
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Get url.
     *
     * @return url.
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set url.
     *
     * @param url the value to set.
     */
    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }

    /**
     * Get canonicalUrl.
     *
     * @return canonicalUrl.
     */
    public function getCanonicalUrl()
    {
        return $this->canonicalUrl;
    }

    /**
     * Set canonicalUrl.
     *
     * @param canonicalUrl the value to set.
     */
    public function setCanonicalUrl($canonicalUrl)
    {
        $this->canonicalUrl = $canonicalUrl;
        return $this;
    }

    /**
     * Get serverName.
     *
     * @return serverName.
     */
    public function getServerName()
    {
        return $this->serverName;
    }

    /**
     * Set serverName.
     *
     * @param serverName the value to set.
     */
    public function setServerName($serverName)
    {
        $this->serverName = $serverName;
        return $this;
    }

    /**
     * Get perfData.
     *
     * @return perfData.
     */
    public function getPerfData()
    {
        return $this->perfData;
    }

    /**
     * Set perfData.
     *
     * @param perfData the value to set.
     */
    public function setPerfData($perfData)
    {
        $this->perfData = $perfData;
        return $this;
    }

    /**
     * Get cookie.
     *
     * @return cookie.
     */
    public function getCookie()
    {
        return $this->cookie;
    }

    /**
     * Set cookie.
     *
     * @param cookie the value to set.
     */
    public function setCookie($cookie)
    {
        $this->cookie = $cookie;
        return $this;
    }

    /**
     * Get post.
     *
     * @return post.
     */
    public function getPost()
    {
        return $this->post;
    }

    /**
     * Set post.
     *
     * @param post the value to set.
     */
    public function setPost($post)
    {
        $this->post = $post;
        return $this;
    }

    /**
     * Get get.
     *
     * @return get.
     */
    public function getGet()
    {
        return $this->get;
    }

    /**
     * Set get.
     *
     * @param get the value to set.
     */
    public function setGet($get)
    {
        $this->get = $get;
        return $this;
    }

    /**
     * Get pmu.
     *
     * @return pmu.
     */
    public function getPmu()
    {
        return $this->pmu;
    }

    /**
     * Set pmu.
     *
     * @param pmu the value to set.
     */
    public function setPmu($pmu)
    {
        $this->pmu = $pmu;
        return $this;
    }

    /**
     * Get wt.
     *
     * @return wt.
     */
    public function getWt()
    {
        return $this->wt;
    }

    /**
     * Set wt.
     *
     * @param wt the value to set.
     */
    public function setWt($wt)
    {
        $this->wt = $wt;
        return $this;
    }

    /**
     * Get cpu.
     *
     * @return cpu.
     */
    public function getCpu()
    {
        return $this->cpu;
    }

    /**
     * Set cpu.
     *
     * @param cpu the value to set.
     */
    public function setCpu($cpu)
    {
        $this->cpu = $cpu;
        return $this;
    }

    /**
     * Get serverId.
     *
     * @return serverId.
     */
    public function getServerId()
    {
        return $this->serverId;
    }

    /**
     * Set serverId.
     *
     * @param serverId the value to set.
     */
    public function setServerId($serverId)
    {
        $this->serverId = $serverId;
        return $this;
    }

    /**
     * Get type.
     *
     * @return type.
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set type.
     *
     * @param type the value to set.
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Get timestamp.
     *
     * @return timestamp.
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * Set timestamp.
     *
     * @param timestamp \DateTime value to set.
     */
    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;
    }

    public function __toString()
    {
        return $this->getId();
    }

    /**
     * @ORM\PrePersist
     */
    public function beforePersist()
    {
        $this->setTimestamp(new \DateTime());
    }

    /**
     * Get aggregateCallsInclude.
     *
     * @return aggregateCallsInclude.
     */
    public function getAggregateCallsInclude()
    {
        return $this->aggregateCallsInclude;
    }

    /**
     * Set aggregateCallsInclude.
     *
     * @param aggregateCallsInclude the value to set.
     */
    public function setAggregateCallsInclude($aggregateCallsInclude)
    {
        $this->aggregateCallsInclude = $aggregateCallsInclude;
        return $this;
    }
}
