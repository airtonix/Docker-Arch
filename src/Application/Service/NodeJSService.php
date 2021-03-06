<?php

namespace Ph3\DockerArch\Application\Service;

use Ph3\DockerArch\Domain\Service\Model\AbstractService;
use Symfony\Component\OptionsResolver\Options;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * @author Cédric Dugat <cedric@dugat.me>
 */
class NodeJSService extends AbstractService implements CliInterface, WebInterface, VhostInterface
{
    const NAME = 'nodejs';

    /**
     * {@inheritdoc}
     */
    public function getOptionsResolver(): Options
    {
        $resolver = new OptionsResolver();
        $resolver->setDefaults([
            'dotfiles' => false,
            'zsh' => true,
            'custom_zsh' => false,
            'powerline' => false,
            'npm_packages' => [],
        ]);
        $resolver->setRequired(['version']);
        $resolver->setAllowedTypes('version', 'string');
        $resolver->setAllowedValues('version', ['0', '4', '6', '7', '8']);

        return $resolver;
    }

    /**
     * {@inheritdoc}
     */
    public function allowedLinksFqcns(): array
    {
        return [
            MySQLService::class,
            MariaDBService::class,
            RedisService::class,
        ];
    }
}
