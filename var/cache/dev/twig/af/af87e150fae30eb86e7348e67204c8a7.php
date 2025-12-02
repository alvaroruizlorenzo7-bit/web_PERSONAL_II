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

/* page/package.html.twig */
class __TwigTemplate_d172bca2c29b80981319e1658df4dbb9 extends Template
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
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/package.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/package.html.twig"));

        $this->parent = $this->load("base.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        yield "package";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 4
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

        // line 5
        yield "







    <!-- Packages Start -->
    <div class=\"container-fluid py-5\">
        <div class=\"container pt-5 pb-3\">
            <div class=\"text-center mb-3 pb-3\">
                <h6 class=\"text-primary text-uppercase\" style=\"letter-spacing: 5px;\">Packages</h6>
                <h1>Pefect Tour Packages</h1>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-4 col-md-6 mb-4\">
                    <div class=\"package-item bg-white mb-2\">
                        <img class=\"img-fluid\" src=\"img/package-1.jpg\" alt=\"\">
                        <div class=\"p-4\">
                            <div class=\"d-flex justify-content-between mb-3\">
                                <small class=\"m-0\"><i class=\"fa fa-map-marker-alt text-primary mr-2\"></i>Thailand</small>
                                <small class=\"m-0\"><i class=\"fa fa-calendar-alt text-primary mr-2\"></i>3 days</small>
                                <small class=\"m-0\"><i class=\"fa fa-user text-primary mr-2\"></i>2 Person</small>
                            </div>
                            <a class=\"h5 text-decoration-none\" href=\"\">Discover amazing places of the world with us</a>
                            <div class=\"border-top mt-4 pt-4\">
                                <div class=\"d-flex justify-content-between\">
                                    <h6 class=\"m-0\"><i class=\"fa fa-star text-primary mr-2\"></i>4.5 <small>(250)</small></h6>
                                    <h5 class=\"m-0\">\$350</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6 mb-4\">
                    <div class=\"package-item bg-white mb-2\">
                        <img class=\"img-fluid\" src=\"img/package-2.jpg\" alt=\"\">
                        <div class=\"p-4\">
                            <div class=\"d-flex justify-content-between mb-3\">
                                <small class=\"m-0\"><i class=\"fa fa-map-marker-alt text-primary mr-2\"></i>Thailand</small>
                                <small class=\"m-0\"><i class=\"fa fa-calendar-alt text-primary mr-2\"></i>3 days</small>
                                <small class=\"m-0\"><i class=\"fa fa-user text-primary mr-2\"></i>2 Person</small>
                            </div>
                            <a class=\"h5 text-decoration-none\" href=\"\">Discover amazing places of the world with us</a>
                            <div class=\"border-top mt-4 pt-4\">
                                <div class=\"d-flex justify-content-between\">
                                    <h6 class=\"m-0\"><i class=\"fa fa-star text-primary mr-2\"></i>4.5 <small>(250)</small></h6>
                                    <h5 class=\"m-0\">\$350</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6 mb-4\">
                    <div class=\"package-item bg-white mb-2\">
                        <img class=\"img-fluid\" src=\"img/package-3.jpg\" alt=\"\">
                        <div class=\"p-4\">
                            <div class=\"d-flex justify-content-between mb-3\">
                                <small class=\"m-0\"><i class=\"fa fa-map-marker-alt text-primary mr-2\"></i>Thailand</small>
                                <small class=\"m-0\"><i class=\"fa fa-calendar-alt text-primary mr-2\"></i>3 days</small>
                                <small class=\"m-0\"><i class=\"fa fa-user text-primary mr-2\"></i>2 Person</small>
                            </div>
                            <a class=\"h5 text-decoration-none\" href=\"\">Discover amazing places of the world with us</a>
                            <div class=\"border-top mt-4 pt-4\">
                                <div class=\"d-flex justify-content-between\">
                                    <h6 class=\"m-0\"><i class=\"fa fa-star text-primary mr-2\"></i>4.5 <small>(250)</small></h6>
                                    <h5 class=\"m-0\">\$350</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6 mb-4\">
                    <div class=\"package-item bg-white mb-2\">
                        <img class=\"img-fluid\" src=\"img/package-4.jpg\" alt=\"\">
                        <div class=\"p-4\">
                            <div class=\"d-flex justify-content-between mb-3\">
                                <small class=\"m-0\"><i class=\"fa fa-map-marker-alt text-primary mr-2\"></i>Thailand</small>
                                <small class=\"m-0\"><i class=\"fa fa-calendar-alt text-primary mr-2\"></i>3 days</small>
                                <small class=\"m-0\"><i class=\"fa fa-user text-primary mr-2\"></i>2 Person</small>
                            </div>
                            <a class=\"h5 text-decoration-none\" href=\"\">Discover amazing places of the world with us</a>
                            <div class=\"border-top mt-4 pt-4\">
                                <div class=\"d-flex justify-content-between\">
                                    <h6 class=\"m-0\"><i class=\"fa fa-star text-primary mr-2\"></i>4.5 <small>(250)</small></h6>
                                    <h5 class=\"m-0\">\$350</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6 mb-4\">
                    <div class=\"package-item bg-white mb-2\">
                        <img class=\"img-fluid\" src=\"img/package-5.jpg\" alt=\"\">
                        <div class=\"p-4\">
                            <div class=\"d-flex justify-content-between mb-3\">
                                <small class=\"m-0\"><i class=\"fa fa-map-marker-alt text-primary mr-2\"></i>Thailand</small>
                                <small class=\"m-0\"><i class=\"fa fa-calendar-alt text-primary mr-2\"></i>3 days</small>
                                <small class=\"m-0\"><i class=\"fa fa-user text-primary mr-2\"></i>2 Person</small>
                            </div>
                            <a class=\"h5 text-decoration-none\" href=\"\">Discover amazing places of the world with us</a>
                            <div class=\"border-top mt-4 pt-4\">
                                <div class=\"d-flex justify-content-between\">
                                    <h6 class=\"m-0\"><i class=\"fa fa-star text-primary mr-2\"></i>4.5 <small>(250)</small></h6>
                                    <h5 class=\"m-0\">\$350</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6 mb-4\">
                    <div class=\"package-item bg-white mb-2\">
                        <img class=\"img-fluid\" src=\"img/package-6.jpg\" alt=\"\">
                        <div class=\"p-4\">
                            <div class=\"d-flex justify-content-between mb-3\">
                                <small class=\"m-0\"><i class=\"fa fa-map-marker-alt text-primary mr-2\"></i>Thailand</small>
                                <small class=\"m-0\"><i class=\"fa fa-calendar-alt text-primary mr-2\"></i>3 days</small>
                                <small class=\"m-0\"><i class=\"fa fa-user text-primary mr-2\"></i>2 Person</small>
                            </div>
                            <a class=\"h5 text-decoration-none\" href=\"\">Discover amazing places of the world with us</a>
                            <div class=\"border-top mt-4 pt-4\">
                                <div class=\"d-flex justify-content-between\">
                                    <h6 class=\"m-0\"><i class=\"fa fa-star text-primary mr-2\"></i>4.5 <small>(250)</small></h6>
                                    <h5 class=\"m-0\">\$350</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Packages End -->


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
        return "page/package.html.twig";
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
        return array (  100 => 5,  87 => 4,  64 => 3,  41 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("
{% extends 'base.html.twig' %}
{% block title%}package{% endblock %}
{% block body%}








    <!-- Packages Start -->
    <div class=\"container-fluid py-5\">
        <div class=\"container pt-5 pb-3\">
            <div class=\"text-center mb-3 pb-3\">
                <h6 class=\"text-primary text-uppercase\" style=\"letter-spacing: 5px;\">Packages</h6>
                <h1>Pefect Tour Packages</h1>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-4 col-md-6 mb-4\">
                    <div class=\"package-item bg-white mb-2\">
                        <img class=\"img-fluid\" src=\"img/package-1.jpg\" alt=\"\">
                        <div class=\"p-4\">
                            <div class=\"d-flex justify-content-between mb-3\">
                                <small class=\"m-0\"><i class=\"fa fa-map-marker-alt text-primary mr-2\"></i>Thailand</small>
                                <small class=\"m-0\"><i class=\"fa fa-calendar-alt text-primary mr-2\"></i>3 days</small>
                                <small class=\"m-0\"><i class=\"fa fa-user text-primary mr-2\"></i>2 Person</small>
                            </div>
                            <a class=\"h5 text-decoration-none\" href=\"\">Discover amazing places of the world with us</a>
                            <div class=\"border-top mt-4 pt-4\">
                                <div class=\"d-flex justify-content-between\">
                                    <h6 class=\"m-0\"><i class=\"fa fa-star text-primary mr-2\"></i>4.5 <small>(250)</small></h6>
                                    <h5 class=\"m-0\">\$350</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6 mb-4\">
                    <div class=\"package-item bg-white mb-2\">
                        <img class=\"img-fluid\" src=\"img/package-2.jpg\" alt=\"\">
                        <div class=\"p-4\">
                            <div class=\"d-flex justify-content-between mb-3\">
                                <small class=\"m-0\"><i class=\"fa fa-map-marker-alt text-primary mr-2\"></i>Thailand</small>
                                <small class=\"m-0\"><i class=\"fa fa-calendar-alt text-primary mr-2\"></i>3 days</small>
                                <small class=\"m-0\"><i class=\"fa fa-user text-primary mr-2\"></i>2 Person</small>
                            </div>
                            <a class=\"h5 text-decoration-none\" href=\"\">Discover amazing places of the world with us</a>
                            <div class=\"border-top mt-4 pt-4\">
                                <div class=\"d-flex justify-content-between\">
                                    <h6 class=\"m-0\"><i class=\"fa fa-star text-primary mr-2\"></i>4.5 <small>(250)</small></h6>
                                    <h5 class=\"m-0\">\$350</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6 mb-4\">
                    <div class=\"package-item bg-white mb-2\">
                        <img class=\"img-fluid\" src=\"img/package-3.jpg\" alt=\"\">
                        <div class=\"p-4\">
                            <div class=\"d-flex justify-content-between mb-3\">
                                <small class=\"m-0\"><i class=\"fa fa-map-marker-alt text-primary mr-2\"></i>Thailand</small>
                                <small class=\"m-0\"><i class=\"fa fa-calendar-alt text-primary mr-2\"></i>3 days</small>
                                <small class=\"m-0\"><i class=\"fa fa-user text-primary mr-2\"></i>2 Person</small>
                            </div>
                            <a class=\"h5 text-decoration-none\" href=\"\">Discover amazing places of the world with us</a>
                            <div class=\"border-top mt-4 pt-4\">
                                <div class=\"d-flex justify-content-between\">
                                    <h6 class=\"m-0\"><i class=\"fa fa-star text-primary mr-2\"></i>4.5 <small>(250)</small></h6>
                                    <h5 class=\"m-0\">\$350</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6 mb-4\">
                    <div class=\"package-item bg-white mb-2\">
                        <img class=\"img-fluid\" src=\"img/package-4.jpg\" alt=\"\">
                        <div class=\"p-4\">
                            <div class=\"d-flex justify-content-between mb-3\">
                                <small class=\"m-0\"><i class=\"fa fa-map-marker-alt text-primary mr-2\"></i>Thailand</small>
                                <small class=\"m-0\"><i class=\"fa fa-calendar-alt text-primary mr-2\"></i>3 days</small>
                                <small class=\"m-0\"><i class=\"fa fa-user text-primary mr-2\"></i>2 Person</small>
                            </div>
                            <a class=\"h5 text-decoration-none\" href=\"\">Discover amazing places of the world with us</a>
                            <div class=\"border-top mt-4 pt-4\">
                                <div class=\"d-flex justify-content-between\">
                                    <h6 class=\"m-0\"><i class=\"fa fa-star text-primary mr-2\"></i>4.5 <small>(250)</small></h6>
                                    <h5 class=\"m-0\">\$350</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6 mb-4\">
                    <div class=\"package-item bg-white mb-2\">
                        <img class=\"img-fluid\" src=\"img/package-5.jpg\" alt=\"\">
                        <div class=\"p-4\">
                            <div class=\"d-flex justify-content-between mb-3\">
                                <small class=\"m-0\"><i class=\"fa fa-map-marker-alt text-primary mr-2\"></i>Thailand</small>
                                <small class=\"m-0\"><i class=\"fa fa-calendar-alt text-primary mr-2\"></i>3 days</small>
                                <small class=\"m-0\"><i class=\"fa fa-user text-primary mr-2\"></i>2 Person</small>
                            </div>
                            <a class=\"h5 text-decoration-none\" href=\"\">Discover amazing places of the world with us</a>
                            <div class=\"border-top mt-4 pt-4\">
                                <div class=\"d-flex justify-content-between\">
                                    <h6 class=\"m-0\"><i class=\"fa fa-star text-primary mr-2\"></i>4.5 <small>(250)</small></h6>
                                    <h5 class=\"m-0\">\$350</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6 mb-4\">
                    <div class=\"package-item bg-white mb-2\">
                        <img class=\"img-fluid\" src=\"img/package-6.jpg\" alt=\"\">
                        <div class=\"p-4\">
                            <div class=\"d-flex justify-content-between mb-3\">
                                <small class=\"m-0\"><i class=\"fa fa-map-marker-alt text-primary mr-2\"></i>Thailand</small>
                                <small class=\"m-0\"><i class=\"fa fa-calendar-alt text-primary mr-2\"></i>3 days</small>
                                <small class=\"m-0\"><i class=\"fa fa-user text-primary mr-2\"></i>2 Person</small>
                            </div>
                            <a class=\"h5 text-decoration-none\" href=\"\">Discover amazing places of the world with us</a>
                            <div class=\"border-top mt-4 pt-4\">
                                <div class=\"d-flex justify-content-between\">
                                    <h6 class=\"m-0\"><i class=\"fa fa-star text-primary mr-2\"></i>4.5 <small>(250)</small></h6>
                                    <h5 class=\"m-0\">\$350</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Packages End -->


    {% endblock %}
", "page/package.html.twig", "/home/alumno/ieselcaminas-classroom-2daw-25-26-web-personal-ii-repositorio/templates/page/package.html.twig");
    }
}
