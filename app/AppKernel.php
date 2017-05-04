<?php

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;

class AppKernel extends Kernel
{
    public function registerBundles()
    {    

        $bundles = array(
        new FOS\UserBundle\FOSUserBundle(), # https://github.com/FriendsOfSymfony/FOSUserBundle --> Install and Config
        new Ivory\CKEditorBundle\IvoryCKEditorBundle(), # https://github.com/egeloen/IvoryCKEditorBundle/ --> Install and No Config
        new Stof\DoctrineExtensionsBundle\StofDoctrineExtensionsBundle(), # https://github.com/stof/StofDoctrineExtensionsBundle --> Install and No Config
        new Vich\UploaderBundle\VichUploaderBundle(), #  https://github.com/dustin10/VichUploaderBundle --> Install and No Config
        new Liip\ImagineBundle\LiipImagineBundle(), # https://github.com/liip/LiipImagineBundle --> Install and No Config
        #new Knp\Bundle\PaginatorBundle\KnpPaginatorBundle(), # https://github.com/KnpLabs/KnpPaginatorBundle --> Install and No Config
        #new Mremi\ContactBundle\MremiContactBundle(), #  https://github.com/mremi/ContactBundle --> no version for Symfony v3.2.7
        #new Knp\Bundle\MenuBundle\KnpMenuBundle(), # https://github.com/KnpLabs/KnpMenuBundle --> Install and No Config
        new Avanzu\AdminThemeBundle\AvanzuAdminThemeBundle(), # https://github.com/avanzu/AdminThemeBundle -->  Install and No Config
        new Lexik\Bundle\FormFilterBundle\LexikFormFilterBundle(), # https://github.com/lexik/LexikFormFilterBundle --> Install and Config
        new Symfony\Bundle\AsseticBundle\AsseticBundle(), # https://github.com/symfony/assetic-bundle --> Install and Config
        new Oneup\FlysystemBundle\OneupFlysystemBundle(), # https://github.com/1up-lab/OneupFlysystemBundle/blob/master/Resources/doc/index.md
        new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
        new Symfony\Bundle\SecurityBundle\SecurityBundle(),
        new Symfony\Bundle\TwigBundle\TwigBundle(),
        new Symfony\Bundle\MonologBundle\MonologBundle(),
        new Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle(),
        new Doctrine\Bundle\DoctrineBundle\DoctrineBundle(),
        new Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle(),
        new DUDEEGO\PlatformBundle\DUDEEGOPlatformBundle(),
        );

        if (in_array($this->getEnvironment(), ['dev', 'test'], true)) {
            $bundles[] = new Symfony\Bundle\DebugBundle\DebugBundle();
            $bundles[] = new Symfony\Bundle\WebProfilerBundle\WebProfilerBundle();
            $bundles[] = new Sensio\Bundle\DistributionBundle\SensioDistributionBundle();
            $bundles[] = new Sensio\Bundle\GeneratorBundle\SensioGeneratorBundle();
            $bundles[] = new Doctrine\Bundle\FixturesBundle\DoctrineFixturesBundle();
        }

        return $bundles;
    }

    public function getRootDir()
    {
        return __DIR__;
    }

    public function getCacheDir()
    {
        return dirname(__DIR__).'/var/cache/'.$this->getEnvironment();
    }

    public function getLogDir()
    {
        return dirname(__DIR__).'/var/logs';
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load($this->getRootDir().'/config/config_'.$this->getEnvironment().'.yml');
    }
}
