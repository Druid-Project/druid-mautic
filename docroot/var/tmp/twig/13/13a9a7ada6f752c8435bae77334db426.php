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

/* @bundles/LeadBundle/Tests/Entity/TagRepositoryTest.php */
class __TwigTemplate_9c0b3341563f1f2d9cb07d9cf8aa5904 extends Template
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

namespace Mautic\\LeadBundle\\Tests\\Entity;

use Mautic\\CoreBundle\\Test\\Doctrine\\RepositoryConfiguratorTrait;
use Mautic\\LeadBundle\\Entity\\Tag;
use Mautic\\LeadBundle\\Entity\\TagRepository;

class TagRepositoryTest extends \\PHPUnit\\Framework\\TestCase
{
    use RepositoryConfiguratorTrait;

    public function testGetTagByNameOrCreateNewOneWithSomeExistingTag(): void
    {
        \$fetchedEntity = new Tag('sometag');

        \$mockRepository = \$this->getMockBuilder(TagRepository::class)
            ->disableOriginalConstructor()
            ->onlyMethods(['findOneBy'])
            ->getMock();

        \$mockRepository->expects(\$this->once())
            ->method('findOneBy')
            ->with(['tag' => 'sometag'])
            ->willReturn(\$fetchedEntity);

        \$this->assertSame(\$fetchedEntity, \$mockRepository->getTagByNameOrCreateNewOne('sometag'));
    }

    public function testGetTagByNameOrCreateNewOneWithSomeNewTag(): void
    {
        \$mockRepository = \$this->getMockBuilder(TagRepository::class)
            ->disableOriginalConstructor()
            ->onlyMethods(['findOneBy'])
            ->getMock();

        \$mockRepository->expects(\$this->once())
            ->method('findOneBy')
            ->with(['tag' => 'sometag'])
            ->willReturn(null);

        \$newEntity = \$mockRepository->getTagByNameOrCreateNewOne('sometag');

        \$this->assertSame('sometag', \$newEntity->getTag());
        \$this->assertNull(\$newEntity->getId());
    }

    public function testGetTagByNameOrCreateNewOneInputFilter(): void
    {
        \$fetchedEntity = new Tag('hello\" world');

        \$mockRepository = \$this->getMockBuilder(TagRepository::class)
            ->disableOriginalConstructor()
            ->onlyMethods(['findOneBy'])
            ->getMock();

        \$mockRepository->expects(\$this->once())
            ->method('findOneBy')
            ->with(['tag' => 'hello\" world'])
            ->willReturn(\$fetchedEntity);

        \$this->assertSame(\$fetchedEntity, \$mockRepository->getTagByNameOrCreateNewOne('hello\" world'));
    }

    public function testRemoveMinusFromTags(): void
    {
        \$repository = \$this->configureRepository(Tag::class);

        \$tags = [
            'sometag1',
            '-sometag2',
            'sometag3',
            '-sometag4',
        ];

        \$expected = [
            'sometag1',
            'sometag2',
            'sometag3',
            'sometag4',
        ];

        \$this->assertSame(\$expected, \$repository->removeMinusFromTags(\$tags));
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
        return "@bundles/LeadBundle/Tests/Entity/TagRepositoryTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Entity/TagRepositoryTest.php", "/app/docroot/app/bundles/LeadBundle/Tests/Entity/TagRepositoryTest.php");
    }
}
