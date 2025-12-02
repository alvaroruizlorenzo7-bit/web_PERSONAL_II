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

/* page/contact.html.twig */
class __TwigTemplate_5eaea139f3700a1ebdd1c28f6744c817 extends Template
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

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/contact.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/contact.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "contact";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        yield "


    <!-- Contact Start -->
    <div class=\"container-fluid py-5\">
        <div class=\"container py-5\">
            <div class=\"text-center mb-3 pb-3\">
                <h6 class=\"text-primary text-uppercase\" style=\"letter-spacing: 5px;\">Contact</h6>
                <h1>Contact For Any Query</h1>
            </div>
            <div class=\"row justify-content-center\">
                <div class=\"col-lg-8\">
                    <div class=\"contact-form bg-white\" style=\"padding: 30px;\">
                        <div id=\"success\"></div>
                        <form name=\"sentMessage\" id=\"contactForm\" novalidate=\"novalidate\">
                            <div class=\"form-row\">
                                <div class=\"control-group col-sm-6\">
                                    <input type=\"text\" class=\"form-control p-4\" id=\"name\" placeholder=\"Your Name\"
                                        required=\"required\" data-validation-required-message=\"Please enter your name\" />
                                    <p class=\"help-block text-danger\"></p>
                                </div>
                                <div class=\"control-group col-sm-6\">
                                    <input type=\"email\" class=\"form-control p-4\" id=\"email\" placeholder=\"Your Email\"
                                        required=\"required\" data-validation-required-message=\"Please enter your email\" />
                                    <p class=\"help-block text-danger\"></p>
                                </div>
                            </div>
                            <div class=\"control-group\">
                                <input type=\"text\" class=\"form-control p-4\" id=\"subject\" placeholder=\"Subject\"
                                    required=\"required\" data-validation-required-message=\"Please enter a subject\" />
                                <p class=\"help-block text-danger\"></p>
                            </div>
                            <div class=\"control-group\">
                                <textarea class=\"form-control py-3 px-4\" rows=\"5\" id=\"message\" placeholder=\"Message\"
                                    required=\"required\"
                                    data-validation-required-message=\"Please enter your message\"></textarea>
                                <p class=\"help-block text-danger\"></p>
                            </div>
                            <div class=\"text-center\">
                                <button class=\"btn btn-primary py-3 px-4\" type=\"submit\" id=\"sendMessageButton\">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->




";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "page/contact.html.twig";
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
        return array (  100 => 4,  87 => 3,  64 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title%}contact{% endblock %}
{% block body%}



    <!-- Contact Start -->
    <div class=\"container-fluid py-5\">
        <div class=\"container py-5\">
            <div class=\"text-center mb-3 pb-3\">
                <h6 class=\"text-primary text-uppercase\" style=\"letter-spacing: 5px;\">Contact</h6>
                <h1>Contact For Any Query</h1>
            </div>
            <div class=\"row justify-content-center\">
                <div class=\"col-lg-8\">
                    <div class=\"contact-form bg-white\" style=\"padding: 30px;\">
                        <div id=\"success\"></div>
                        <form name=\"sentMessage\" id=\"contactForm\" novalidate=\"novalidate\">
                            <div class=\"form-row\">
                                <div class=\"control-group col-sm-6\">
                                    <input type=\"text\" class=\"form-control p-4\" id=\"name\" placeholder=\"Your Name\"
                                        required=\"required\" data-validation-required-message=\"Please enter your name\" />
                                    <p class=\"help-block text-danger\"></p>
                                </div>
                                <div class=\"control-group col-sm-6\">
                                    <input type=\"email\" class=\"form-control p-4\" id=\"email\" placeholder=\"Your Email\"
                                        required=\"required\" data-validation-required-message=\"Please enter your email\" />
                                    <p class=\"help-block text-danger\"></p>
                                </div>
                            </div>
                            <div class=\"control-group\">
                                <input type=\"text\" class=\"form-control p-4\" id=\"subject\" placeholder=\"Subject\"
                                    required=\"required\" data-validation-required-message=\"Please enter a subject\" />
                                <p class=\"help-block text-danger\"></p>
                            </div>
                            <div class=\"control-group\">
                                <textarea class=\"form-control py-3 px-4\" rows=\"5\" id=\"message\" placeholder=\"Message\"
                                    required=\"required\"
                                    data-validation-required-message=\"Please enter your message\"></textarea>
                                <p class=\"help-block text-danger\"></p>
                            </div>
                            <div class=\"text-center\">
                                <button class=\"btn btn-primary py-3 px-4\" type=\"submit\" id=\"sendMessageButton\">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->




{% endblock %}", "page/contact.html.twig", "/home/alumno/Proyecto_Alvaro_web/templates/page/contact.html.twig");
    }
}
