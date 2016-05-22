<?php

use Symfony\Component\Config\Loader\LoaderInterface;
use Symfony\Component\HttpKernel\Kernel;

class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new Symfony\Bundle\SecurityBundle\SecurityBundle(),
            new Symfony\Bundle\TwigBundle\TwigBundle(),
            new Symfony\Bundle\MonologBundle\MonologBundle(),
            new Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle(),
            new Doctrine\Bundle\DoctrineBundle\DoctrineBundle(),
            new Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle(),
            new AppBundle\AppBundle(),

            new Condors\TnMallBundle\CondorsTnMallBundle(),

            new FOS\UserBundle\FOSUserBundle(),
            new SaadTazi\GChartBundle\SaadTaziGChartBundle(),
            new Nomaya\SocialBundle\NomayaSocialBundle(),
            new HWI\Bundle\OAuthBundle\HWIOAuthBundle(),

            new Stfalcon\Bundle\TinymceBundle\StfalconTinymceBundle(),
            new Endroid\Bundle\QrCodeBundle\EndroidQrCodeBundle(),
            new Gregwar\CaptchaBundle\GregwarCaptchaBundle(),

            new FOS\RestBundle\FOSRestBundle(),
            new FOS\CommentBundle\FOSCommentBundle(),
            new JMS\SerializerBundle\JMSSerializerBundle($this),

            new Symfony\Bundle\AsseticBundle\AsseticBundle(),
            new DCS\RatingBundle\DCSRatingBundle(),

            new Beelab\PaypalBundle\BeelabPaypalBundle(),

            new Mremi\ContactBundle\MremiContactBundle(),

            new Knp\Bundle\SnappyBundle\KnpSnappyBundle(),

            new Ob\HighchartsBundle\ObHighchartsBundle(),




        );

        if (in_array($this->getEnvironment(), array('dev', 'test'), true)) {
            $bundles[] = new Symfony\Bundle\DebugBundle\DebugBundle();
            $bundles[] = new Symfony\Bundle\WebProfilerBundle\WebProfilerBundle();
            $bundles[] = new Sensio\Bundle\DistributionBundle\SensioDistributionBundle();
            $bundles[] = new Sensio\Bundle\GeneratorBundle\SensioGeneratorBundle();
        }

        return $bundles;
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load($this->getRootDir() . '/config/config_' . $this->getEnvironment() . '.yml');
    }
}