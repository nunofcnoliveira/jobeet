<?php

namespace Nuno\JobeetBundle\Entity;

/**
 * Category
 */
class Category
{
	/**
	 * @var integer
	 */
	private $id;

	/**
	 * @var string
	 */
	private $name;

	/**
	 * @var \Doctrine\Common\Collections\Collection
	 */
	private $jobs;

	/**
	 * @var \Doctrine\Common\Collections\Collection
	 */
	private $affiliates;

	private $active_jobs;

	/**
	 * Constructor
	 */
	public function __construct()
	{
		$this->jobs = new \Doctrine\Common\Collections\ArrayCollection();
		$this->affiliates = new \Doctrine\Common\Collections\ArrayCollection();
	}

	/**
	 * Get id
	 *
	 * @return integer
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * Set name
	 *
	 * @param string $name
	 *
	 * @return Category
	 */
	public function setName($name)
	{
		$this->name = $name;

		return $this;
	}

	/**
	 * Get name
	 *
	 * @return string
	 */
	public function getName()
	{
		return $this->name;
	}

	/**
	 * Add job
	 *
	 * @param \Nuno\JobeetBundle\Entity\Job $job
	 *
	 * @return Category
	 */
	public function addJob(\Nuno\JobeetBundle\Entity\Job $job)
	{
		$this->jobs[] = $job;

		return $this;
	}

	/**
	 * Remove job
	 *
	 * @param \Nuno\JobeetBundle\Entity\Job $job
	 */
	public function removeJob(\Nuno\JobeetBundle\Entity\Job $job)
	{
		$this->jobs->removeElement($job);
	}

	/**
	 * Get jobs
	 *
	 * @return \Doctrine\Common\Collections\Collection
	 */
	public function getJobs()
	{
		return $this->jobs;
	}

	/**
	 * Add affiliate
	 *
	 * @param \Nuno\JobeetBundle\Entity\Affiliate $affiliate
	 *
	 * @return Category
	 */
	public function addAffiliate(\Nuno\JobeetBundle\Entity\Affiliate $affiliate)
	{
		$this->affiliates[] = $affiliate;

		return $this;
	}

	/**
	 * Remove affiliate
	 *
	 * @param \Nuno\JobeetBundle\Entity\Affiliate $affiliate
	 */
	public function removeAffiliate(\Nuno\JobeetBundle\Entity\Affiliate $affiliate)
	{
		$this->affiliates->removeElement($affiliate);
	}

	/**
	 * Get affiliates
	 *
	 * @return \Doctrine\Common\Collections\Collection
	 */
	public function getAffiliates()
	{
		return $this->affiliates;
	}

	public function __toString()
	{
		return $this->getName() ? $this->getName() : "";
	}

	public function setActiveJobs($jobs)
	{
		$this->active_jobs = $jobs;
	}

	public function getActiveJobs()
	{
		return $this->active_jobs;
	}
}
