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

/* @bundles/InstallBundle/Tests/Command/InstallCommandTest.php */
class __TwigTemplate_3ac6f20b15982887eec4f43f1b5b10c6 extends Template
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

namespace Mautic\\InstallBundle\\Tests\\Command;

use Doctrine\\Bundle\\DoctrineBundle\\Registry;
use Mautic\\CoreBundle\\Doctrine\\Connection\\ConnectionWrapper;
use Mautic\\InstallBundle\\Command\\InstallCommand;
use Mautic\\InstallBundle\\Install\\InstallService;
use PHPUnit\\Framework\\MockObject\\MockObject;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Console\\Application;
use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Helper\\HelperSet;
use Symfony\\Component\\Console\\Input\\ArrayInput;
use Symfony\\Component\\Console\\Input\\InputDefinition;
use Symfony\\Component\\Console\\Output\\BufferedOutput;

class InstallCommandTest extends TestCase
{
    /**
     * @var MockObject&InstallService
     */
    private MockObject \$installer;

    /**
     * @var MockObject&Registry
     */
    private MockObject \$doctrineRegistry;

    private InstallCommand \$command;

    protected function setUp(): void
    {
        parent::setUp();
        \$this->installer        = \$this->createMock(InstallService::class);
        \$this->doctrineRegistry = \$this->createMock(Registry::class);
        \$application            = \$this->createMock(Application::class);
        \$inputDefinition        = \$this->createMock(InputDefinition::class);
        \$command                = \$this->createMock(Command::class);

        \$inputDefinition->method('getOptions')->willReturn([]);
        \$inputDefinition->method('getArguments')->willReturn([]);

        \$application->method('getHelperSet')->willReturn(\$this->createMock(HelperSet::class));
        \$application->method('getDefinition')->willReturn(\$inputDefinition);
        \$application->method('find')->willReturn(\$command);

        \$this->command = new InstallCommand(\$this->installer, \$this->doctrineRegistry);
        \$this->command->setApplication(\$application);
    }

    public function testCommandWhenSiteInstalled(): void
    {
        \$this->installer->method('checkIfInstalled')->willReturnOnConsecutiveCalls(true);

        \$input  = new ArrayInput(['site_url' => 'localhost']);
        \$output = new BufferedOutput();
        \$this->command->run(\$input, \$output);

        \$this->assertSame('Mautic already installed'.PHP_EOL, \$output->fetch());
    }

    public function testCommandWhenSiteNotInstalled(): void
    {
        \$this->installer->method('checkIfInstalled')->willReturnOnConsecutiveCalls(false);

        \$this->doctrineRegistry->method('getConnection')->willReturn(\$this->createMock(ConnectionWrapper::class));

        \$input = new ArrayInput(
            [
                'site_url'          => 'localhost',
                '--admin_firstname' => 'Admin',
                '--admin_lastname'  => 'Mautic',
                '--admin_username'  => 'admin',
                '--admin_email'     => 'admin@example.com',
                '--admin_password'  => 'password',
            ]
        );
        \$output = new BufferedOutput();
        \$this->command->run(\$input, \$output);

        \$this->assertStringContainsString('Install complete'.PHP_EOL, \$output->fetch());
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
        return "@bundles/InstallBundle/Tests/Command/InstallCommandTest.php";
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
        return new Source("", "@bundles/InstallBundle/Tests/Command/InstallCommandTest.php", "/app/docroot/app/bundles/InstallBundle/Tests/Command/InstallCommandTest.php");
    }
}
