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

/* @bundles/ApiBundle/EventListener/PreAuthorizationEventListener.php */
class __TwigTemplate_2bb913de7bdd04cc04571404e150836e extends Template
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

namespace Mautic\\ApiBundle\\EventListener;

use Doctrine\\ORM\\EntityManager;
use FOS\\OAuthServerBundle\\Event\\PreAuthorizationEvent;
use Mautic\\CoreBundle\\Security\\Permissions\\CorePermissions;
use Symfony\\Component\\Security\\Core\\Exception\\AccessDeniedException;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

class PreAuthorizationEventListener
{
    public function __construct(
        private EntityManager \$em,
        private CorePermissions \$mauticSecurity,
        private TranslatorInterface \$translator
    ) {
    }

    /**
     * @throws AccessDeniedException
     */
    public function onPreAuthorizationProcess(PreAuthorizationEvent \$event): void
    {
        if (\$user = \$this->getUser(\$event)) {
            // check to see if user has api access
            if (!\$this->mauticSecurity->isGranted('api:access:full')) {
                throw new AccessDeniedException(\$this->translator->trans('mautic.core.error.accessdenied', [], 'flashes'));
            }
            \$client = \$event->getClient();
            \$event->setAuthorizedClient(
                \$client->isAuthorizedClient(\$user, \$this->em)
            );
        }
    }

    public function onPostAuthorizationProcess(PreAuthorizationEvent \$event): void
    {
        if (\$event->isAuthorizedClient()) {
            if (null !== \$client = \$event->getClient()) {
                \$user = \$this->getUser(\$event);
                \$client->addUser(\$user);
                \$this->em->persist(\$client);
                \$this->em->flush();
            }
        }
    }

    /**
     * @return mixed
     */
    protected function getUser(PreAuthorizationEvent \$event)
    {
        return \$this->em->getRepository(\\Mautic\\UserBundle\\Entity\\User::class)->findOneByUsername(\$event->getUser()->getUserIdentifier());
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
        return "@bundles/ApiBundle/EventListener/PreAuthorizationEventListener.php";
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
        return new Source("", "@bundles/ApiBundle/EventListener/PreAuthorizationEventListener.php", "/app/docroot/app/bundles/ApiBundle/EventListener/PreAuthorizationEventListener.php");
    }
}
