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

/* @bundles/CoreBundle/Tests/Command/UnusedIpDeleteCommandFunctionalTest.php */
class __TwigTemplate_58bc66e6bc098cdd6290b76e1a0f7480 extends Template
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

declare(strict_types=1);

namespace Mautic\\CoreBundle\\Tests\\Command;

use Mautic\\CoreBundle\\Entity\\IpAddress;
use Mautic\\CoreBundle\\Entity\\IpAddressRepository;
use Mautic\\CoreBundle\\Test\\MauticMysqlTestCase;

class UnusedIpDeleteCommandFunctionalTest extends MauticMysqlTestCase
{
    /**
     * @throws \\Exception
     */
    public function testUnusedIpDeleteCommand(): void
    {
        // Emulate unused IP address.
        /** @var IpAddressRepository \$ipAddressRepo */
        \$ipAddressRepo = \$this->em->getRepository(IpAddress::class);
        \$ipAddressRepo->saveEntity(new IpAddress('127.0.0.1'));
        \$count = \$ipAddressRepo->count(['ipAddress' => '127.0.0.1']);
        self::assertSame(1, \$count);

        // Delete unused IP address.
        \$this->testSymfonyCommand('mautic:unusedip:delete');

        \$count = \$ipAddressRepo->count(['ipAddress' => '127.0.0.1']);
        self::assertSame(0, \$count);
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
        return "@bundles/CoreBundle/Tests/Command/UnusedIpDeleteCommandFunctionalTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Command/UnusedIpDeleteCommandFunctionalTest.php", "/app/docroot/app/bundles/CoreBundle/Tests/Command/UnusedIpDeleteCommandFunctionalTest.php");
    }
}
