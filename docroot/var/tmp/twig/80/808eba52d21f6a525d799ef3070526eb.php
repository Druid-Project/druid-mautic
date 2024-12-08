<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* @bundles/PluginBundle/Entity/PluginRepository.php */
class __TwigTemplate_10117a13ece9e5f9b4b28b44c8a99f53 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<?php

namespace Mautic\\PluginBundle\\Entity;

use Mautic\\CoreBundle\\Entity\\CommonRepository;

/**
 * @extends CommonRepository<Plugin>
 */
class PluginRepository extends CommonRepository
{
    /**
     * Find an addon record by bundle name.
     *
     * @param string \$bundle
     *
     * @return mixed
     *
     * @throws \\Doctrine\\ORM\\NonUniqueResultException
     */
    public function findByBundle(\$bundle)
    {
        \$q = \$this->createQueryBuilder(\$this->getTableAlias());
        \$q->where(\$q->expr()->eq('p.bundle', ':bundle'))
            ->setParameter('bundle', \$bundle);

        return \$q->getQuery()->getOneOrNullResult();
    }

    public function getEntities(array \$args = [])
    {
        \$q = \$this->_em->createQueryBuilder();
        \$q->select(\$this->getTableAlias())
            ->from(Plugin::class, \$this->getTableAlias(), (!empty(\$args['index'])) ? \$this->getTableAlias().'.'.\$args['index'] : \$this->getTableAlias().'.id');

        \$args['qb']               = \$q;
        \$args['ignore_paginator'] = true;

        return parent::getEntities(\$args);
    }

    protected function getDefaultOrder(): array
    {
        return [
            ['p.name', 'ASC'],
        ];
    }

    public function getTableAlias(): string
    {
        return 'p';
    }
}
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/PluginBundle/Entity/PluginRepository.php";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@bundles/PluginBundle/Entity/PluginRepository.php", "/app/docroot/app/bundles/PluginBundle/Entity/PluginRepository.php");
    }
}
