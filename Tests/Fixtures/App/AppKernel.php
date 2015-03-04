<?php
/*
* This file is part of the PierstovalApiBundle package.
*
* (c) Alexandre "Pierstoval" Rock Ancelet <pierstoval@gmail.com>
*
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
*/

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;

class AppKernel extends Kernel
{
    public function registerBundles()
    {
        return array(
            new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new Symfony\Bundle\TwigBundle\TwigBundle(),
            new Doctrine\Bundle\DoctrineBundle\DoctrineBundle(),
            new Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle(),
            new FOS\RestBundle\FOSRestBundle(),
            new JMS\SerializerBundle\JMSSerializerBundle(),
            new Pierstoval\Bundle\ApiBundle\PierstovalApiBundle(),
            new Pierstoval\Bundle\ApiBundle\Tests\Fixtures\ApiDataTestBundle\ApiDataTestBundle(),
        );
    }

    public function getEnvironment()
    {
        return 'test';
    }

    public function isDebug()
    {
        return true;
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load(__DIR__.'/config/config.yml');
    }

    /**
     * @return string
     */
    public function getCacheDir()
    {
        return __DIR__.'/../../../vendor/_test_logs/cache';
    }

    /**
     * @return string
     */
    public function getLogDir()
    {
        return __DIR__.'/../../../vendor/_test_logs/logs';
    }
}