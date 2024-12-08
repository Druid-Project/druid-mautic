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

/* @MauticUser/User/recent_activity.html.twig */
class __TwigTemplate_89771ea48ced2e0800529add6e4050b8 extends Template
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
        yield "<!-- Recent activity block(audit_log table) -->
<div class=\"col-md-3 height-auto\">
\t";
        // line 3
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->getCustomContent("right.section.top", $context);
        yield "
\t<div class=\"panel shd-none bdr-rds-0 bdr-w-0 mb-0\">
\t\t<div class=\"panel-heading\">
\t\t\t<div class=\"panel-title\">";
        // line 6
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.core.recent.activity", [], "messages");
        yield "</div>
\t\t</div>
\t\t<div class=\"panel-body pt-xs\">
\t\t\t";
        // line 9
        if ((array_key_exists("logs", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["logs"]) || array_key_exists("logs", $context) ? $context["logs"] : (function () { throw new RuntimeError('Variable "logs" does not exist.', 9, $this->source); })())))) {
            // line 10
            yield "\t\t\t\t<ul class=\"media-list media-list-feed\">
\t\t\t\t\t";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["logs"]) || array_key_exists("logs", $context) ? $context["logs"] : (function () { throw new RuntimeError('Variable "logs" does not exist.', 11, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
                // line 12
                yield "
\t\t\t\t\t\t";
                // line 13
                if (((CoreExtension::getAttribute($this->env, $this->source, $context["log"], "action", [], "any", false, false, false, 13) == "create") && (CoreExtension::getAttribute($this->env, $this->source, $context["log"], "object", [], "any", false, false, false, 13) == "user"))) {
                    // line 14
                    yield "
\t\t\t\t\t\t\t";
                    // line 15
                    $context["userPath"] = [];
                    // line 16
                    yield "\t\t\t\t\t\t\t";
                    $context["user_id"] = "1";
                    // line 17
                    yield "\t\t\t\t\t\t\t";
                    $context["usersEmail"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["log"], "details", [], "any", false, false, false, 17), "email", [], "array", false, false, false, 17), 1, [], "array", false, false, false, 17);
                    // line 18
                    yield "\t\t\t\t\t\t\t";
                    $context["emailIsMatch"] = false;
                    // line 19
                    yield "\t\t\t\t\t\t\t";
                    $context["usernameIsMatch"] = false;
                    // line 20
                    yield "
\t\t\t\t\t\t\t";
                    // line 21
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 21, $this->source); })()));
                    foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                        // line 22
                        yield "\t\t\t\t\t\t\t\t";
                        if (((array_key_exists("usersEmail", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["usersEmail"]) || array_key_exists("usersEmail", $context) ? $context["usersEmail"] : (function () { throw new RuntimeError('Variable "usersEmail" does not exist.', 22, $this->source); })()))) && (CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 22) == (isset($context["usersEmail"]) || array_key_exists("usersEmail", $context) ? $context["usersEmail"] : (function () { throw new RuntimeError('Variable "usersEmail" does not exist.', 22, $this->source); })())))) {
                            // line 23
                            yield "\t\t\t\t\t\t\t\t\t";
                            $context["emailIsMatch"] = true;
                            // line 24
                            yield "\t\t\t\t\t\t\t\t\t";
                            $context["user_id"] = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 24);
                            // line 25
                            yield "\t\t\t\t\t\t\t\t";
                        } else {
                            // line 26
                            yield "\t\t\t\t\t\t\t\t\t";
                            $context["usernameIsMatch"] = true;
                            // line 27
                            yield "\t\t\t\t\t\t\t\t\t";
                            $context["user_id"] = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 27);
                            // line 28
                            yield "\t\t\t\t\t\t\t\t";
                        }
                        // line 29
                        yield "\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['user'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 30
                    yield "\t\t\t\t\t\t\t";
                    if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["log"], "details", [], "any", false, true, false, 30), "username", [], "array", false, true, false, 30), 1, [], "array", true, true, false, 30) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["log"], "details", [], "any", false, false, false, 30), "username", [], "array", false, false, false, 30), 1, [], "array", false, false, false, 30)))) {
                        // line 31
                        yield "\t\t\t\t\t\t\t\t";
                        if (((isset($context["emailIsMatch"]) || array_key_exists("emailIsMatch", $context) ? $context["emailIsMatch"] : (function () { throw new RuntimeError('Variable "emailIsMatch" does not exist.', 31, $this->source); })()) == true)) {
                            // line 32
                            yield "\t\t\t\t\t\t\t\t\t";
                            $context["userPath"] = Twig\Extension\CoreExtension::merge((isset($context["userPath"]) || array_key_exists("userPath", $context) ? $context["userPath"] : (function () { throw new RuntimeError('Variable "userPath" does not exist.', 32, $this->source); })()), [(isset($context["user_id"]) || array_key_exists("user_id", $context) ? $context["user_id"] : (function () { throw new RuntimeError('Variable "user_id" does not exist.', 32, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["log"], "details", [], "any", false, false, false, 32), "username", [], "array", false, false, false, 32), 1, [], "array", false, false, false, 32)]);
                            // line 33
                            yield "\t\t\t\t\t\t\t\t";
                        }
                        // line 34
                        yield "\t\t\t\t\t\t\t";
                    }
                    // line 35
                    yield "
\t\t\t\t\t\t";
                } elseif (((CoreExtension::getAttribute($this->env, $this->source,                 // line 36
$context["log"], "action", [], "any", false, false, false, 36) == "create") && (CoreExtension::getAttribute($this->env, $this->source, $context["log"], "object", [], "any", false, false, false, 36) == "role"))) {
                    // line 37
                    yield "
\t\t\t\t\t\t\t";
                    // line 38
                    $context["role_id"] = "1";
                    // line 39
                    yield "\t\t\t\t\t\t\t";
                    $context["roleName"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["log"], "details", [], "any", false, false, false, 39), "name", [], "array", false, false, false, 39), 1, [], "array", false, false, false, 39);
                    // line 40
                    yield "\t\t\t\t\t\t\t";
                    $context["roleIsMatch"] = false;
                    // line 41
                    yield "
\t\t\t\t\t\t\t";
                    // line 42
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable((isset($context["roles"]) || array_key_exists("roles", $context) ? $context["roles"] : (function () { throw new RuntimeError('Variable "roles" does not exist.', 42, $this->source); })()));
                    foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                        // line 43
                        yield "\t\t\t\t\t\t\t\t";
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["role"], "name", [], "any", false, false, false, 43) == (isset($context["roleName"]) || array_key_exists("roleName", $context) ? $context["roleName"] : (function () { throw new RuntimeError('Variable "roleName" does not exist.', 43, $this->source); })()))) {
                            // line 44
                            yield "\t\t\t\t\t\t\t\t\t";
                            $context["roleIsMatch"] = true;
                            // line 45
                            yield "\t\t\t\t\t\t\t\t\t";
                            $context["role_id"] = CoreExtension::getAttribute($this->env, $this->source, $context["role"], "id", [], "any", false, false, false, 45);
                            // line 46
                            yield "\t\t\t\t\t\t\t\t";
                        }
                        // line 47
                        yield "\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['role'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 48
                    yield "\t\t\t\t\t\t\t";
                    if (((isset($context["roleIsMatch"]) || array_key_exists("roleIsMatch", $context) ? $context["roleIsMatch"] : (function () { throw new RuntimeError('Variable "roleIsMatch" does not exist.', 48, $this->source); })()) == true)) {
                        // line 49
                        yield "\t\t\t\t\t\t\t\t";
                        $context["rolePath"] = Twig\Extension\CoreExtension::merge([], [(isset($context["role_id"]) || array_key_exists("role_id", $context) ? $context["role_id"] : (function () { throw new RuntimeError('Variable "role_id" does not exist.', 49, $this->source); })()), (isset($context["roleName"]) || array_key_exists("roleName", $context) ? $context["roleName"] : (function () { throw new RuntimeError('Variable "roleName" does not exist.', 49, $this->source); })())]);
                        // line 50
                        yield "\t\t\t\t\t\t\t";
                    }
                    // line 51
                    yield "
\t\t\t\t\t\t";
                } elseif (((CoreExtension::getAttribute($this->env, $this->source,                 // line 52
$context["log"], "action", [], "any", false, false, false, 52) == "update") && (CoreExtension::getAttribute($this->env, $this->source, $context["log"], "object", [], "any", false, false, false, 52) == "user"))) {
                    // line 53
                    yield "
\t\t\t\t\t\t\t";
                    // line 54
                    $context["userPath"] = [];
                    // line 55
                    yield "\t\t\t\t\t\t\t";
                    [$context["usersUsername"], $context["usersEmail"], $context["usersFirstName"], $context["usersLastName"], $context["usersRole"], $context["usersPosition"], $context["usersSignature"]] =                     ["", "", "", "", "", "", ""];
                    // line 56
                    yield "\t\t\t\t\t\t\t";
                    $context["user_id"] = "1";
                    // line 57
                    yield "\t\t\t\t\t\t\t";
                    $context["user_username"] = "admin";
                    // line 58
                    yield "\t\t\t\t\t\t\t";
                    $context["isMatch"] = false;
                    // line 59
                    yield "\t\t\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["log"], "details", [], "any", false, false, false, 59));
                    foreach ($context['_seq'] as $context["_key"] => $context["detail"]) {
                        // line 60
                        yield "\t\t\t\t\t\t\t\t";
                        if (($context["detail"] == "username")) {
                            // line 61
                            yield "\t\t\t\t\t\t\t\t\t";
                            $context["usersUsername"] = CoreExtension::getAttribute($this->env, $this->source, $context["detail"], 1, [], "array", false, false, false, 61);
                            // line 62
                            yield "
\t\t\t\t\t\t\t\t";
                        } elseif ((                        // line 63
$context["detail"] == "email")) {
                            // line 64
                            yield "\t\t\t\t\t\t\t\t\t";
                            $context["usersEmail"] = CoreExtension::getAttribute($this->env, $this->source, $context["detail"], 1, [], "array", false, false, false, 64);
                            // line 65
                            yield "
\t\t\t\t\t\t\t\t";
                        } elseif ((                        // line 66
$context["detail"] == "firstname")) {
                            // line 67
                            yield "\t\t\t\t\t\t\t\t\t";
                            $context["usersFirstName"] = CoreExtension::getAttribute($this->env, $this->source, $context["detail"], 1, [], "array", false, false, false, 67);
                            // line 68
                            yield "
\t\t\t\t\t\t\t\t";
                        } elseif ((                        // line 69
$context["detail"] == "lastName")) {
                            // line 70
                            yield "\t\t\t\t\t\t\t\t\t";
                            $context["usersLastName"] = CoreExtension::getAttribute($this->env, $this->source, $context["detail"], 1, [], "array", false, false, false, 70);
                            // line 71
                            yield "
\t\t\t\t\t\t\t\t";
                        } elseif ((                        // line 72
$context["detail"] == "role")) {
                            // line 73
                            yield "\t\t\t\t\t\t\t\t\t";
                            $context["usersRole"] = CoreExtension::getAttribute($this->env, $this->source, $context["detail"], 1, [], "array", false, false, false, 73);
                            // line 74
                            yield "
\t\t\t\t\t\t\t\t";
                        } elseif ((                        // line 75
$context["detail"] == "position")) {
                            // line 76
                            yield "\t\t\t\t\t\t\t\t\t";
                            $context["usersPosition"] = CoreExtension::getAttribute($this->env, $this->source, $context["detail"], 1, [], "array", false, false, false, 76);
                            // line 77
                            yield "
\t\t\t\t\t\t\t\t";
                        } elseif ((                        // line 78
$context["detail"] == "signature")) {
                            // line 79
                            yield "\t\t\t\t\t\t\t\t\t";
                            $context["usersSignature"] = CoreExtension::getAttribute($this->env, $this->source, $context["detail"], 1, [], "array", false, false, false, 79);
                            // line 80
                            yield "\t\t\t\t\t\t\t\t";
                        }
                        // line 81
                        yield "\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['detail'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 82
                    yield "
\t\t\t\t\t\t\t";
                    // line 83
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 83, $this->source); })()));
                    foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                        // line 84
                        yield "\t\t\t\t\t\t\t\t";
                        if ((((((((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 84) == (isset($context["usersEmail"]) || array_key_exists("usersEmail", $context) ? $context["usersEmail"] : (function () { throw new RuntimeError('Variable "usersEmail" does not exist.', 84, $this->source); })())) || (CoreExtension::getAttribute($this->env, $this->source, $context["user"], "userName", [], "any", false, false, false, 84) == (isset($context["usersUsername"]) || array_key_exists("usersUsername", $context) ? $context["usersUsername"] : (function () { throw new RuntimeError('Variable "usersUsername" does not exist.', 84, $this->source); })()))) || (CoreExtension::getAttribute($this->env, $this->source, $context["user"], "firstName", [], "any", false, false, false, 84) == (isset($context["usersFirstName"]) || array_key_exists("usersFirstName", $context) ? $context["usersFirstName"] : (function () { throw new RuntimeError('Variable "usersFirstName" does not exist.', 84, $this->source); })()))) || (CoreExtension::getAttribute($this->env, $this->source,                         // line 85
$context["user"], "lastName", [], "any", false, false, false, 85) == (isset($context["usersLastName"]) || array_key_exists("usersLastName", $context) ? $context["usersLastName"] : (function () { throw new RuntimeError('Variable "usersLastName" does not exist.', 85, $this->source); })()))) || (CoreExtension::getAttribute($this->env, $this->source, $context["user"], "role", [], "any", false, false, false, 85) == (isset($context["usersRole"]) || array_key_exists("usersRole", $context) ? $context["usersRole"] : (function () { throw new RuntimeError('Variable "usersRole" does not exist.', 85, $this->source); })()))) || (CoreExtension::getAttribute($this->env, $this->source,                         // line 86
$context["user"], "position", [], "any", false, false, false, 86) == (isset($context["usersPosition"]) || array_key_exists("usersPosition", $context) ? $context["usersPosition"] : (function () { throw new RuntimeError('Variable "usersPosition" does not exist.', 86, $this->source); })()))) || (CoreExtension::getAttribute($this->env, $this->source, $context["user"], "signature", [], "any", false, false, false, 86) == (isset($context["usersSignature"]) || array_key_exists("usersSignature", $context) ? $context["usersSignature"] : (function () { throw new RuntimeError('Variable "usersSignature" does not exist.', 86, $this->source); })())))) {
                            // line 87
                            yield "\t\t\t\t\t\t\t\t\t";
                            $context["isMatch"] = true;
                            // line 88
                            yield "\t\t\t\t\t\t\t\t\t";
                            $context["user_id"] = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 88);
                            // line 89
                            yield "\t\t\t\t\t\t\t\t\t";
                            $context["user_username"] = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "userName", [], "any", false, false, false, 89);
                            // line 90
                            yield "\t\t\t\t\t\t\t\t";
                        }
                        // line 91
                        yield "\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['user'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 92
                    yield "\t\t\t\t\t\t\t";
                    if (((isset($context["isMatch"]) || array_key_exists("isMatch", $context) ? $context["isMatch"] : (function () { throw new RuntimeError('Variable "isMatch" does not exist.', 92, $this->source); })()) == true)) {
                        // line 93
                        yield "\t\t\t\t\t\t\t\t";
                        $context["userPath"] = Twig\Extension\CoreExtension::merge((isset($context["userPath"]) || array_key_exists("userPath", $context) ? $context["userPath"] : (function () { throw new RuntimeError('Variable "userPath" does not exist.', 93, $this->source); })()), [(isset($context["user_id"]) || array_key_exists("user_id", $context) ? $context["user_id"] : (function () { throw new RuntimeError('Variable "user_id" does not exist.', 93, $this->source); })()), (isset($context["user_username"]) || array_key_exists("user_username", $context) ? $context["user_username"] : (function () { throw new RuntimeError('Variable "user_username" does not exist.', 93, $this->source); })())]);
                        // line 94
                        yield "\t\t\t\t\t\t\t";
                    }
                    // line 95
                    yield "
\t\t\t\t\t\t";
                } elseif (((CoreExtension::getAttribute($this->env, $this->source,                 // line 96
$context["log"], "action", [], "any", false, false, false, 96) == "update") && (CoreExtension::getAttribute($this->env, $this->source, $context["log"], "object", [], "any", false, false, false, 96) == "role"))) {
                    // line 97
                    yield "\t\t\t\t\t\t\t";
                    [$context["name"], $context["description"], $context["rowPermissions"]] =                     ["", "", ""];
                    // line 98
                    yield "\t\t\t\t\t\t\t";
                    $context["role_id"] = "1";
                    // line 99
                    yield "\t\t\t\t\t\t\t";
                    $context["roleName"] = "Admininstrator";
                    // line 100
                    yield "\t\t\t\t\t\t\t";
                    $context["isMatch"] = false;
                    // line 101
                    yield "\t\t\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["log"], "details", [], "any", false, false, false, 101));
                    foreach ($context['_seq'] as $context["_key"] => $context["detail"]) {
                        // line 102
                        yield "\t\t\t\t\t\t\t\t";
                        if (($context["detail"] == "name")) {
                            // line 103
                            yield "\t\t\t\t\t\t\t\t\t";
                            $context["name"] = CoreExtension::getAttribute($this->env, $this->source, $context["detail"], 1, [], "array", false, false, false, 103);
                            // line 104
                            yield "
\t\t\t\t\t\t\t\t";
                        } elseif ((                        // line 105
$context["detail"] == "description")) {
                            // line 106
                            yield "\t\t\t\t\t\t\t\t\t";
                            $context["description"] = CoreExtension::getAttribute($this->env, $this->source, $context["detail"], 1, [], "array", false, false, false, 106);
                            // line 107
                            yield "
\t\t\t\t\t\t\t\t";
                        } elseif ((                        // line 108
$context["detail"] == "rawPermissions")) {
                            // line 109
                            yield "\t\t\t\t\t\t\t\t\t";
                            $context["rowPermissions"] = CoreExtension::getAttribute($this->env, $this->source, $context["detail"], 1, [], "array", false, false, false, 109);
                            // line 110
                            yield "\t\t\t\t\t\t\t\t";
                        }
                        // line 111
                        yield "\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['detail'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 112
                    yield "
\t\t\t\t\t\t\t";
                    // line 113
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable((isset($context["roles"]) || array_key_exists("roles", $context) ? $context["roles"] : (function () { throw new RuntimeError('Variable "roles" does not exist.', 113, $this->source); })()));
                    foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                        // line 114
                        yield "\t\t\t\t\t\t\t\t";
                        if ((((CoreExtension::getAttribute($this->env, $this->source, $context["role"], "name", [], "any", false, false, false, 114) == (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 114, $this->source); })())) || (CoreExtension::getAttribute($this->env, $this->source, $context["role"], "description", [], "any", false, false, false, 114) == (isset($context["description"]) || array_key_exists("description", $context) ? $context["description"] : (function () { throw new RuntimeError('Variable "description" does not exist.', 114, $this->source); })()))) || (CoreExtension::getAttribute($this->env, $this->source,                         // line 115
$context["role"], "rawPermissions", [], "any", false, false, false, 115) == (isset($context["rowPermissions"]) || array_key_exists("rowPermissions", $context) ? $context["rowPermissions"] : (function () { throw new RuntimeError('Variable "rowPermissions" does not exist.', 115, $this->source); })())))) {
                            // line 116
                            yield "\t\t\t\t\t\t\t\t\t";
                            $context["isMatch"] = true;
                            // line 117
                            yield "\t\t\t\t\t\t\t\t\t";
                            $context["role_id"] = CoreExtension::getAttribute($this->env, $this->source, $context["role"], "id", [], "any", false, false, false, 117);
                            // line 118
                            yield "\t\t\t\t\t\t\t\t\t";
                            $context["roleName"] = CoreExtension::getAttribute($this->env, $this->source, $context["role"], "name", [], "any", false, false, false, 118);
                            // line 119
                            yield "\t\t\t\t\t\t\t\t";
                        }
                        // line 120
                        yield "\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['role'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 121
                    yield "\t\t\t\t\t\t\t";
                    if (((isset($context["isMatch"]) || array_key_exists("isMatch", $context) ? $context["isMatch"] : (function () { throw new RuntimeError('Variable "isMatch" does not exist.', 121, $this->source); })()) == true)) {
                        // line 122
                        yield "\t\t\t\t\t\t\t\t";
                        $context["rolePath"] = Twig\Extension\CoreExtension::merge([], [(isset($context["role_id"]) || array_key_exists("role_id", $context) ? $context["role_id"] : (function () { throw new RuntimeError('Variable "role_id" does not exist.', 122, $this->source); })()), (isset($context["roleName"]) || array_key_exists("roleName", $context) ? $context["roleName"] : (function () { throw new RuntimeError('Variable "roleName" does not exist.', 122, $this->source); })())]);
                        // line 123
                        yield "\t\t\t\t\t\t\t";
                    }
                    // line 124
                    yield "\t\t\t\t\t\t";
                }
                // line 125
                yield "\t\t\t\t\t\t<li class=\"media\">
\t\t\t\t\t\t\t<div class=\"media-object pull-left\">
\t\t\t\t\t\t\t\t";
                // line 127
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["log"], "action", [], "any", false, false, false, 127) == "login")) {
                    // line 128
                    yield "\t\t\t\t\t\t\t\t\t<span class=\"figure featured\">
\t\t\t\t\t\t\t\t\t\t<span class=\"ri-login-circle-line\"></span>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 131
$context["log"], "action", [], "any", false, false, false, 131) == "update")) {
                    // line 132
                    yield "\t\t\t\t\t\t\t\t\t<span class=\"figure\"></span>
\t\t\t\t\t\t\t\t";
                } else {
                    // line 134
                    yield "\t\t\t\t\t\t\t\t\t<span class=\"figure\"></span>
\t\t\t\t\t\t\t\t";
                }
                // line 136
                yield "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t";
                // line 138
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["log"], "object", [], "any", false, false, false, 138) == "user")) {
                    // line 139
                    yield "\t\t\t\t\t\t\t\t\t";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["log"], "action", [], "any", false, false, false, 139) == "update")) {
                        // line 140
                        yield "\t\t\t\t\t\t\t\t\t\t";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.user.user.form.user"), "html", null, true);
                        yield "
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                        // line 141
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_user_action", ["objectAction" => "edit", "objectId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["userPath"]) || array_key_exists("userPath", $context) ? $context["userPath"] : (function () { throw new RuntimeError('Variable "userPath" does not exist.', 141, $this->source); })()), 0, [], "array", false, false, false, 141)]), "html", null, true);
                        yield "\" data-toggle=\"ajax\">
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 142
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userPath"]) || array_key_exists("userPath", $context) ? $context["userPath"] : (function () { throw new RuntimeError('Variable "userPath" does not exist.', 142, $this->source); })()), 1, [], "array", false, false, false, 142), "html", null, true);
                        yield "</a>
\t\t\t\t\t\t\t\t\t\t";
                        // line 143
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.user.role.form.updated_by"), "html", null, true);
                        yield "

\t\t\t\t\t\t\t\t\t";
                    } elseif ((CoreExtension::getAttribute($this->env, $this->source,                     // line 145
$context["log"], "action", [], "any", false, false, false, 145) == "create")) {
                        // line 146
                        yield "\t\t\t\t\t\t\t\t\t\t<a href=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_user_action", ["objectAction" => "edit", "objectId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["userPath"]) || array_key_exists("userPath", $context) ? $context["userPath"] : (function () { throw new RuntimeError('Variable "userPath" does not exist.', 146, $this->source); })()), 0, [], "array", false, false, false, 146)]), "html", null, true);
                        yield "\" data-toggle=\"ajax\">
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 147
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userPath"]) || array_key_exists("userPath", $context) ? $context["userPath"] : (function () { throw new RuntimeError('Variable "userPath" does not exist.', 147, $this->source); })()), 1, [], "array", false, false, false, 147), "html", null, true);
                        yield "</a>
\t\t\t\t\t\t\t\t\t\t";
                        // line 148
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.user.user.form.created_by"), "html", null, true);
                        yield "
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 150
                    yield "
\t\t\t\t\t\t\t\t";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 151
$context["log"], "object", [], "any", false, false, false, 151) == "role")) {
                    // line 152
                    yield "\t\t\t\t\t\t\t\t\t";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["log"], "action", [], "any", false, false, false, 152) == "create")) {
                        // line 153
                        yield "\t\t\t\t\t\t\t\t\t\t";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.role.role"), "html", null, true);
                        yield "
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                        // line 154
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_role_action", ["objectAction" => "edit", "objectId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["rolePath"]) || array_key_exists("rolePath", $context) ? $context["rolePath"] : (function () { throw new RuntimeError('Variable "rolePath" does not exist.', 154, $this->source); })()), 0, [], "array", false, false, false, 154)]), "html", null, true);
                        yield "\" data-toggle=\"ajax\">
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 155
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["rolePath"]) || array_key_exists("rolePath", $context) ? $context["rolePath"] : (function () { throw new RuntimeError('Variable "rolePath" does not exist.', 155, $this->source); })()), 1, [], "array", false, false, false, 155), "html", null, true);
                        yield "</a>
\t\t\t\t\t\t\t\t\t\t";
                        // line 156
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.user.user.form.created_by"), "html", null, true);
                        yield "

\t\t\t\t\t\t\t\t\t";
                    } elseif ((CoreExtension::getAttribute($this->env, $this->source,                     // line 158
$context["log"], "action", [], "any", false, false, false, 158) == "update")) {
                        // line 159
                        yield "\t\t\t\t\t\t\t\t\t\t";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.role.role"), "html", null, true);
                        yield "
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                        // line 160
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_role_action", ["objectAction" => "edit", "objectId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["rolePath"]) || array_key_exists("rolePath", $context) ? $context["rolePath"] : (function () { throw new RuntimeError('Variable "rolePath" does not exist.', 160, $this->source); })()), 0, [], "array", false, false, false, 160)]), "html", null, true);
                        yield "\" data-toggle=\"ajax\">
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 161
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["rolePath"]) || array_key_exists("rolePath", $context) ? $context["rolePath"] : (function () { throw new RuntimeError('Variable "rolePath" does not exist.', 161, $this->source); })()), 1, [], "array", false, false, false, 161), "html", null, true);
                        yield "</a>
\t\t\t\t\t\t\t\t\t\t";
                        // line 162
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.user.role.form.updated_by"), "html", null, true);
                        yield "
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 164
                    yield "
\t\t\t\t\t\t\t\t";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 165
$context["log"], "object", [], "any", false, false, false, 165) == "security")) {
                    // line 166
                    yield "\t\t\t\t\t\t\t\t\t";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["log"], "action", [], "any", false, false, false, 166) == "login")) {
                        // line 167
                        yield "\t\t\t\t\t\t\t\t\t\t";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.user.user.form.user"), "html", null, true);
                        yield "

\t\t\t\t\t\t\t\t\t";
                    } elseif ((CoreExtension::getAttribute($this->env, $this->source,                     // line 169
$context["log"], "action", [], "any", false, false, false, 169) == "update")) {
                        // line 170
                        yield "\t\t\t\t\t\t\t\t\t\t";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.user.user.form.updated_by"), "html", null, true);
                        yield "

\t\t\t\t\t\t\t\t\t";
                    }
                    // line 173
                    yield "\t\t\t\t\t\t\t\t";
                }
                // line 174
                yield "
\t\t\t\t\t\t\t\t";
                // line 175
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["log"], "userId", [], "any", true, true, false, 175) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["log"], "userId", [], "any", false, false, false, 175)))) {
                    // line 176
                    yield "\t\t\t\t\t\t\t\t\t<a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_user_action", ["objectAction" => "edit", "objectId" => CoreExtension::getAttribute($this->env, $this->source, $context["log"], "userId", [], "any", false, false, false, 176)]), "html", null, true);
                    yield "\" data-toggle=\"ajax\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["log"], "userName", [], "any", false, false, false, 176), "html", null, true);
                    yield "</a>
\t\t\t\t\t\t\t\t\t";
                    // line 177
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["log"], "action", [], "any", false, false, false, 177) == "login")) {
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.user.user.form.login_by"), "html", null, true);
                    }
                    // line 178
                    yield "
\t\t\t\t\t\t\t\t";
                } else {
                    // line 180
                    yield "\t\t\t\t\t\t\t\t\t";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["log"], "userName", [], "any", false, false, false, 180), "html", null, true);
                    yield "
\t\t\t\t\t\t\t\t";
                }
                // line 182
                yield "\t\t\t\t\t\t\t\t<p class=\"fs-12 dark-sm\">
\t\t\t\t\t\t\t\t\t<small>
\t\t\t\t\t\t\t\t\t\t";
                // line 184
                yield $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toFull(CoreExtension::getAttribute($this->env, $this->source, $context["log"], "dateAdded", [], "any", false, false, false, 184));
                yield "</small>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['log'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 189
            yield "\t\t\t\t</ul>
\t\t\t";
        }
        // line 191
        yield "\t\t</div>
\t</div>
\t";
        // line 193
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->getCustomContent("right.section.bottom", $context);
        yield "
</div>
<!-- Recent activity block(audit_log table) -->
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticUser/User/recent_activity.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  596 => 193,  592 => 191,  588 => 189,  577 => 184,  573 => 182,  567 => 180,  563 => 178,  559 => 177,  552 => 176,  550 => 175,  547 => 174,  544 => 173,  537 => 170,  535 => 169,  529 => 167,  526 => 166,  524 => 165,  521 => 164,  516 => 162,  512 => 161,  508 => 160,  503 => 159,  501 => 158,  496 => 156,  492 => 155,  488 => 154,  483 => 153,  480 => 152,  478 => 151,  475 => 150,  470 => 148,  466 => 147,  461 => 146,  459 => 145,  454 => 143,  450 => 142,  446 => 141,  441 => 140,  438 => 139,  436 => 138,  432 => 136,  428 => 134,  424 => 132,  422 => 131,  417 => 128,  415 => 127,  411 => 125,  408 => 124,  405 => 123,  402 => 122,  399 => 121,  393 => 120,  390 => 119,  387 => 118,  384 => 117,  381 => 116,  379 => 115,  377 => 114,  373 => 113,  370 => 112,  364 => 111,  361 => 110,  358 => 109,  356 => 108,  353 => 107,  350 => 106,  348 => 105,  345 => 104,  342 => 103,  339 => 102,  334 => 101,  331 => 100,  328 => 99,  325 => 98,  322 => 97,  320 => 96,  317 => 95,  314 => 94,  311 => 93,  308 => 92,  302 => 91,  299 => 90,  296 => 89,  293 => 88,  290 => 87,  288 => 86,  287 => 85,  285 => 84,  281 => 83,  278 => 82,  272 => 81,  269 => 80,  266 => 79,  264 => 78,  261 => 77,  258 => 76,  256 => 75,  253 => 74,  250 => 73,  248 => 72,  245 => 71,  242 => 70,  240 => 69,  237 => 68,  234 => 67,  232 => 66,  229 => 65,  226 => 64,  224 => 63,  221 => 62,  218 => 61,  215 => 60,  210 => 59,  207 => 58,  204 => 57,  201 => 56,  198 => 55,  196 => 54,  193 => 53,  191 => 52,  188 => 51,  185 => 50,  182 => 49,  179 => 48,  173 => 47,  170 => 46,  167 => 45,  164 => 44,  161 => 43,  157 => 42,  154 => 41,  151 => 40,  148 => 39,  146 => 38,  143 => 37,  141 => 36,  138 => 35,  135 => 34,  132 => 33,  129 => 32,  126 => 31,  123 => 30,  117 => 29,  114 => 28,  111 => 27,  108 => 26,  105 => 25,  102 => 24,  99 => 23,  96 => 22,  92 => 21,  89 => 20,  86 => 19,  83 => 18,  80 => 17,  77 => 16,  75 => 15,  72 => 14,  70 => 13,  67 => 12,  63 => 11,  60 => 10,  58 => 9,  52 => 6,  46 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticUser/User/recent_activity.html.twig", "/app/docroot/app/bundles/UserBundle/Resources/views/User/recent_activity.html.twig");
    }
}
