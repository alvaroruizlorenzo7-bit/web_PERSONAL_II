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

/* blog/destination.html.twig */
class __TwigTemplate_fba0e0f8c54d6695859fb1c0cc347020 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/destination.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/destination.html.twig"));

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

        yield "destination";
        
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


    <!-- Destination Start -->
    <div class=\"container-fluid py-5\">
        <div class=\"container pt-5 pb-3\">
            <div class=\"text-center mb-3 pb-3\">
                <h6 class=\"text-primary text-uppercase\" style=\"letter-spacing: 5px;\">Destination</h6>
                <h1>Explore Top Destination</h1>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-4 col-md-6 mb-4\">
                    <div class=\"destination-item position-relative overflow-hidden mb-2\">
                        <img class=\"img-fluid\" src=\"img/destination-1.jpg\" alt=\"\">
                        <a class=\"destination-overlay text-white text-decoration-none\" href=\"\">
                            <h5 class=\"text-white\">United States</h5>
                            <span>100 Cities</span>
                        </a>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6 mb-4\">
                    <div class=\"destination-item position-relative overflow-hidden mb-2\">
                        <img class=\"img-fluid\" src=\"img/destination-2.jpg\" alt=\"\">
                        <a class=\"destination-overlay text-white text-decoration-none\" href=\"\">
                            <h5 class=\"text-white\">United Kingdom</h5>
                            <span>100 Cities</span>
                        </a>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6 mb-4\">
                    <div class=\"destination-item position-relative overflow-hidden mb-2\">
                        <img class=\"img-fluid\" src=\"img/destination-3.jpg\" alt=\"\">
                        <a class=\"destination-overlay text-white text-decoration-none\" href=\"\">
                            <h5 class=\"text-white\">Australia</h5>
                            <span>100 Cities</span>
                        </a>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6 mb-4\">
                    <div class=\"destination-item position-relative overflow-hidden mb-2\">
                        <img class=\"img-fluid\" src=\"img/destination-4.jpg\" alt=\"\">
                        <a class=\"destination-overlay text-white text-decoration-none\" href=\"\">
                            <h5 class=\"text-white\">India</h5>
                            <span>100 Cities</span>
                        </a>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6 mb-4\">
                    <div class=\"destination-item position-relative overflow-hidden mb-2\">
                        <img class=\"img-fluid\" src=\"img/destination-5.jpg\" alt=\"\">
                        <a class=\"destination-overlay text-white text-decoration-none\" href=\"\">
                            <h5 class=\"text-white\">South Africa</h5>
                            <span>100 Cities</span>
                        </a>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6 mb-4\">
                    <div class=\"destination-item position-relative overflow-hidden mb-2\">
                        <img class=\"img-fluid\" src=\"img/destination-6.jpg\" alt=\"\">
                        <a class=\"destination-overlay text-white text-decoration-none\" href=\"\">
                            <h5 class=\"text-white\">Indonesia</h5>
                            <span>100 Cities</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Destination Start -->



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
        return "blog/destination.html.twig";
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
{% block title%}destination{% endblock %}
{% block body%}



    <!-- Destination Start -->
    <div class=\"container-fluid py-5\">
        <div class=\"container pt-5 pb-3\">
            <div class=\"text-center mb-3 pb-3\">
                <h6 class=\"text-primary text-uppercase\" style=\"letter-spacing: 5px;\">Destination</h6>
                <h1>Explore Top Destination</h1>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-4 col-md-6 mb-4\">
                    <div class=\"destination-item position-relative overflow-hidden mb-2\">
                        <img class=\"img-fluid\" src=\"img/destination-1.jpg\" alt=\"\">
                        <a class=\"destination-overlay text-white text-decoration-none\" href=\"\">
                            <h5 class=\"text-white\">United States</h5>
                            <span>100 Cities</span>
                        </a>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6 mb-4\">
                    <div class=\"destination-item position-relative overflow-hidden mb-2\">
                        <img class=\"img-fluid\" src=\"img/destination-2.jpg\" alt=\"\">
                        <a class=\"destination-overlay text-white text-decoration-none\" href=\"\">
                            <h5 class=\"text-white\">United Kingdom</h5>
                            <span>100 Cities</span>
                        </a>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6 mb-4\">
                    <div class=\"destination-item position-relative overflow-hidden mb-2\">
                        <img class=\"img-fluid\" src=\"img/destination-3.jpg\" alt=\"\">
                        <a class=\"destination-overlay text-white text-decoration-none\" href=\"\">
                            <h5 class=\"text-white\">Australia</h5>
                            <span>100 Cities</span>
                        </a>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6 mb-4\">
                    <div class=\"destination-item position-relative overflow-hidden mb-2\">
                        <img class=\"img-fluid\" src=\"img/destination-4.jpg\" alt=\"\">
                        <a class=\"destination-overlay text-white text-decoration-none\" href=\"\">
                            <h5 class=\"text-white\">India</h5>
                            <span>100 Cities</span>
                        </a>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6 mb-4\">
                    <div class=\"destination-item position-relative overflow-hidden mb-2\">
                        <img class=\"img-fluid\" src=\"img/destination-5.jpg\" alt=\"\">
                        <a class=\"destination-overlay text-white text-decoration-none\" href=\"\">
                            <h5 class=\"text-white\">South Africa</h5>
                            <span>100 Cities</span>
                        </a>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6 mb-4\">
                    <div class=\"destination-item position-relative overflow-hidden mb-2\">
                        <img class=\"img-fluid\" src=\"img/destination-6.jpg\" alt=\"\">
                        <a class=\"destination-overlay text-white text-decoration-none\" href=\"\">
                            <h5 class=\"text-white\">Indonesia</h5>
                            <span>100 Cities</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Destination Start -->



{% endblock %}

", "blog/destination.html.twig", "/home/alumno/ieselcaminas-classroom-2daw-25-26-web-personal-ii-repositorio/templates/blog/destination.html.twig");
    }
}
