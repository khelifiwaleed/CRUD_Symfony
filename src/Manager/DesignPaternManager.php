<?php declare(strict_types=1);

namespace App\Manager;


use App\Entity\Blog;
use Doctrine\ORM\EntityManagerInterface;

use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * Class DesignPaternManager
 *
 * @package App\Manager
 */
class DesignPaternManager
{
    /**
     * @var EntityManagerInterface
     */
    private $em;

    /**
     * DesignPaternManager constructor.
     *
     * @param EntityManagerInterface $em
     */
    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    /**
     * @param array $arguments
     * @return object[]
     */
    public function getBlog(array $arguments = [])
    {
        if (empty($arguments) === true) {
            return $this->em->getRepository(Blog::class)->findAll();
        } else {
            return $this->em->getRepository(Blog::class)->findBy($arguments);
        }
    }


    /**
     * @param array $arguments
     * @return boolean
     */
    public function addBlog(array $arguments, bool $flush = true)
    {
       
        $this->em->persist($arguments);
        if ($flush) {
            $this->em->flush();
        }
        dd('bien');
        return $this->redirectToRoute('display_blog');  //redirection
    }


    /**
     * @param array $arguments
     * @return object|null
     */
    public function getOneBlog(array $arguments)
    {
        return $this->em->getRepository(Blog::class)->findOneBy($arguments);
    }

    /**
     * @param array $arguments
     * @return object|null
     */
    public function getLastBlog()
    {
        return $this->em->getRepository(Blog::class)->findOneBy([], ['id' => 'DESC']);
    }

    /**
     * @param array $Blog
     * @return boolean
     */
    public function updateAll(array $Blog)
    {
        try {
            dd('OK');
        } catch (\Exception $e) {
            return false;
        }
        return (bool) $response;
    }



}
