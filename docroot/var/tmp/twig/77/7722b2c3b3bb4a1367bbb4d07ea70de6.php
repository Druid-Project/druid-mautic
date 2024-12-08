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

/* @bundles/UserBundle/Tests/Model/PasswordStrengthEstimatorModelTest.php */
class __TwigTemplate_a4b9f5ad81c0c3d81b5cb75923f60568 extends Template
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

namespace Mautic\\UserBundle\\Tests\\Model;

use Mautic\\CoreBundle\\Test\\MauticMysqlTestCase;
use Mautic\\UserBundle\\Entity\\Role;
use Mautic\\UserBundle\\Entity\\RoleRepository;
use Mautic\\UserBundle\\Entity\\User;
use Mautic\\UserBundle\\Form\\Validator\\Constraints\\NotWeak;
use PHPUnit\\Framework\\Assert;
use Symfony\\Component\\Security\\Core\\Encoder\\EncoderFactory;
use Symfony\\Component\\Validator\\ConstraintViolation;
use Symfony\\Component\\Validator\\Validator\\ValidatorInterface;

final class PasswordStrengthEstimatorModelTest extends MauticMysqlTestCase
{
    private EncoderFactory \$passwordEncoder;

    private RoleRepository \$roleRepository;

    private ValidatorInterface \$validator;

    protected function setUp(): void
    {
        parent::setUp();
        \$this->passwordEncoder = static::getContainer()->get('security.encoder_factory');
        \$this->roleRepository  = \$this->em->getRepository(Role::class);
        \$this->validator       = static::getContainer()->get('validator');
    }

    public function testThatItIsNotPossibleToCreateAnUserWithAWeakPassword(): void
    {
        \$simplePassword = '11111111';

        \$user = new User();
        \$user->setFirstName('First Name');
        \$user->setLastName('LastName');
        \$user->setUsername('username');
        \$user->setEmail('some@email.domain');
        \$user->setPlainPassword(\$simplePassword);
        \$user->setPassword(\$this->passwordEncoder->getEncoder(\$user)->encodePassword(\$simplePassword, \$user->getSalt()));
        \$user->setRole(\$this->roleRepository->findAll()[0]);
        \$violations                    = \$this->validator->validate(\$user);
        \$hasNotWeakConstraintViolation = false;

        /** @var ConstraintViolation \$violation */
        foreach (\$violations as \$violation) {
            \$hasNotWeakConstraintViolation |= \$violation->getConstraint() instanceof NotWeak;
        }

        Assert::assertGreaterThanOrEqual(1, count(\$violations));
        Assert::assertTrue((bool) \$hasNotWeakConstraintViolation);
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
        return "@bundles/UserBundle/Tests/Model/PasswordStrengthEstimatorModelTest.php";
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
        return new Source("", "@bundles/UserBundle/Tests/Model/PasswordStrengthEstimatorModelTest.php", "/app/docroot/app/bundles/UserBundle/Tests/Model/PasswordStrengthEstimatorModelTest.php");
    }
}
