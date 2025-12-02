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

/* blog/blog.html.twig */
class __TwigTemplate_766d3881e484949704050ab4aa843398 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/blog.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/blog.html.twig"));

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

        yield "blog";
        
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


    <!-- Blog Start -->
    <div class=\"container-fluid py-5\">
        <div class=\"container py-5\">
            <div class=\"row\">
                <div class=\"col-lg-8\">
                    <div class=\"row pb-3\">
                        <div class=\"col-md-6 mb-4 pb-2\">
                            <div class=\"blog-item\">
                                <div class=\"position-relative\">
                                    <img class=\"img-fluid w-100\" src=\"img/blog-1.jpg\" alt=\"\">
                                    <div class=\"blog-date\">
                                        <h6 class=\"font-weight-bold mb-n1\">01</h6>
                                        <small class=\"text-white text-uppercase\">Jan</small>
                                    </div>
                                </div>
                                <div class=\"bg-white p-4\">
                                    <div class=\"d-flex mb-2\">
                                        <a class=\"text-primary text-uppercase text-decoration-none\" href=\"\">Admin</a>
                                        <span class=\"text-primary px-2\">|</span>
                                        <a class=\"text-primary text-uppercase text-decoration-none\" href=\"\">Tours & Travel</a>
                                    </div>
                                    <a class=\"h5 m-0 text-decoration-none\" href=\"\">Dolor justo sea kasd lorem clita justo diam amet</a>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6 mb-4 pb-2\">
                            <div class=\"blog-item\">
                                <div class=\"position-relative\">
                                    <img class=\"img-fluid w-100\" src=\"img/blog-2.jpg\" alt=\"\">
                                    <div class=\"blog-date\">
                                        <h6 class=\"font-weight-bold mb-n1\">01</h6>
                                        <small class=\"text-white text-uppercase\">Jan</small>
                                    </div>
                                </div>
                                <div class=\"bg-white p-4\">
                                    <div class=\"d-flex mb-2\">
                                        <a class=\"text-primary text-uppercase text-decoration-none\" href=\"\">Admin</a>
                                        <span class=\"text-primary px-2\">|</span>
                                        <a class=\"text-primary text-uppercase text-decoration-none\" href=\"\">Tours & Travel</a>
                                    </div>
                                    <a class=\"h5 m-0 text-decoration-none\" href=\"\">Dolor justo sea kasd lorem clita justo diam amet</a>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6 mb-4 pb-2\">
                            <div class=\"blog-item\">
                                <div class=\"position-relative\">
                                    <img class=\"img-fluid w-100\" src=\"img/blog-3.jpg\" alt=\"\">
                                    <div class=\"blog-date\">
                                        <h6 class=\"font-weight-bold mb-n1\">01</h6>
                                        <small class=\"text-white text-uppercase\">Jan</small>
                                    </div>
                                </div>
                                <div class=\"bg-white p-4\">
                                    <div class=\"d-flex mb-2\">
                                        <a class=\"text-primary text-uppercase text-decoration-none\" href=\"\">Admin</a>
                                        <span class=\"text-primary px-2\">|</span>
                                        <a class=\"text-primary text-uppercase text-decoration-none\" href=\"\">Tours & Travel</a>
                                    </div>
                                    <a class=\"h5 m-0 text-decoration-none\" href=\"\">Dolor justo sea kasd lorem clita justo diam amet</a>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6 mb-4 pb-2\">
                            <div class=\"blog-item\">
                                <div class=\"position-relative\">
                                    <img class=\"img-fluid w-100\" src=\"img/blog-1.jpg\" alt=\"\">
                                    <div class=\"blog-date\">
                                        <h6 class=\"font-weight-bold mb-n1\">01</h6>
                                        <small class=\"text-white text-uppercase\">Jan</small>
                                    </div>
                                </div>
                                <div class=\"bg-white p-4\">
                                    <div class=\"d-flex mb-2\">
                                        <a class=\"text-primary text-uppercase text-decoration-none\" href=\"\">Admin</a>
                                        <span class=\"text-primary px-2\">|</span>
                                        <a class=\"text-primary text-uppercase text-decoration-none\" href=\"\">Tours & Travel</a>
                                    </div>
                                    <a class=\"h5 m-0 text-decoration-none\" href=\"\">Dolor justo sea kasd lorem clita justo diam amet</a>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6 mb-4 pb-2\">
                            <div class=\"blog-item\">
                                <div class=\"position-relative\">
                                    <img class=\"img-fluid w-100\" src=\"img/blog-2.jpg\" alt=\"\">
                                    <div class=\"blog-date\">
                                        <h6 class=\"font-weight-bold mb-n1\">01</h6>
                                        <small class=\"text-white text-uppercase\">Jan</small>
                                    </div>
                                </div>
                                <div class=\"bg-white p-4\">
                                    <div class=\"d-flex mb-2\">
                                        <a class=\"text-primary text-uppercase text-decoration-none\" href=\"\">Admin</a>
                                        <span class=\"text-primary px-2\">|</span>
                                        <a class=\"text-primary text-uppercase text-decoration-none\" href=\"\">Tours & Travel</a>
                                    </div>
                                    <a class=\"h5 m-0 text-decoration-none\" href=\"\">Dolor justo sea kasd lorem clita justo diam amet</a>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6 mb-4 pb-2\">
                            <div class=\"blog-item\">
                                <div class=\"position-relative\">
                                    <img class=\"img-fluid w-100\" src=\"img/blog-3.jpg\" alt=\"\">
                                    <div class=\"blog-date\">
                                        <h6 class=\"font-weight-bold mb-n1\">01</h6>
                                        <small class=\"text-white text-uppercase\">Jan</small>
                                    </div>
                                </div>
                                <div class=\"bg-white p-4\">
                                    <div class=\"d-flex mb-2\">
                                        <a class=\"text-primary text-uppercase text-decoration-none\" href=\"\">Admin</a>
                                        <span class=\"text-primary px-2\">|</span>
                                        <a class=\"text-primary text-uppercase text-decoration-none\" href=\"\">Tours & Travel</a>
                                    </div>
                                    <a class=\"h5 m-0 text-decoration-none\" href=\"\">Dolor justo sea kasd lorem clita justo diam amet</a>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6 mb-4 pb-2\">
                            <div class=\"blog-item\">
                                <div class=\"position-relative\">
                                    <img class=\"img-fluid w-100\" src=\"img/blog-1.jpg\" alt=\"\">
                                    <div class=\"blog-date\">
                                        <h6 class=\"font-weight-bold mb-n1\">01</h6>
                                        <small class=\"text-white text-uppercase\">Jan</small>
                                    </div>
                                </div>
                                <div class=\"bg-white p-4\">
                                    <div class=\"d-flex mb-2\">
                                        <a class=\"text-primary text-uppercase text-decoration-none\" href=\"\">Admin</a>
                                        <span class=\"text-primary px-2\">|</span>
                                        <a class=\"text-primary text-uppercase text-decoration-none\" href=\"\">Tours & Travel</a>
                                    </div>
                                    <a class=\"h5 m-0 text-decoration-none\" href=\"\">Dolor justo sea kasd lorem clita justo diam amet</a>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6 mb-4 pb-2\">
                            <div class=\"blog-item\">
                                <div class=\"position-relative\">
                                    <img class=\"img-fluid w-100\" src=\"img/blog-2.jpg\" alt=\"\">
                                    <div class=\"blog-date\">
                                        <h6 class=\"font-weight-bold mb-n1\">01</h6>
                                        <small class=\"text-white text-uppercase\">Jan</small>
                                    </div>
                                </div>
                                <div class=\"bg-white p-4\">
                                    <div class=\"d-flex mb-2\">
                                        <a class=\"text-primary text-uppercase text-decoration-none\" href=\"\">Admin</a>
                                        <span class=\"text-primary px-2\">|</span>
                                        <a class=\"text-primary text-uppercase text-decoration-none\" href=\"\">Tours & Travel</a>
                                    </div>
                                    <a class=\"h5 m-0 text-decoration-none\" href=\"\">Dolor justo sea kasd lorem clita justo diam amet</a>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-12\">
                            <nav aria-label=\"Page navigation\">
                                <ul class=\"pagination pagination-lg justify-content-center bg-white mb-0\" style=\"padding: 30px;\">
                                  <li class=\"page-item disabled\">
                                    <a class=\"page-link\" href=\"#\" aria-label=\"Previous\">
                                      <span aria-hidden=\"true\">&laquo;</span>
                                      <span class=\"sr-only\">Previous</span>
                                    </a>
                                  </li>
                                  <li class=\"page-item active\"><a class=\"page-link\" href=\"#\">1</a></li>
                                  <li class=\"page-item\"><a class=\"page-link\" href=\"#\">2</a></li>
                                  <li class=\"page-item\"><a class=\"page-link\" href=\"#\">3</a></li>
                                  <li class=\"page-item\">
                                    <a class=\"page-link\" href=\"#\" aria-label=\"Next\">
                                      <span aria-hidden=\"true\">&raquo;</span>
                                      <span class=\"sr-only\">Next</span>
                                    </a>
                                  </li>
                                </ul>
                              </nav>
                        </div>
                    </div>
                </div>
    
                <div class=\"col-lg-4 mt-5 mt-lg-0\">
                    <!-- Author Bio -->
                    <div class=\"d-flex flex-column text-center bg-white mb-5 py-5 px-4\">
                        <img src=\"img/user.jpg\" class=\"img-fluid mx-auto mb-3\" style=\"width: 100px;\">
                        <h3 class=\"text-primary mb-3\">John Doe</h3>
                        <p>Conset elitr erat vero dolor ipsum et diam, eos dolor lorem, ipsum sit no ut est  ipsum erat kasd amet elitr</p>
                        <div class=\"d-flex justify-content-center\">
                            <a class=\"text-primary px-2\" href=\"\">
                                <i class=\"fab fa-facebook-f\"></i>
                            </a>
                            <a class=\"text-primary px-2\" href=\"\">
                                <i class=\"fab fa-twitter\"></i>
                            </a>
                            <a class=\"text-primary px-2\" href=\"\">
                                <i class=\"fab fa-linkedin-in\"></i>
                            </a>
                            <a class=\"text-primary px-2\" href=\"\">
                                <i class=\"fab fa-instagram\"></i>
                            </a>
                            <a class=\"text-primary px-2\" href=\"\">
                                <i class=\"fab fa-youtube\"></i>
                            </a>
                        </div>
                    </div>
    
                    <!-- Search Form -->
                    <div class=\"mb-5\">
                        <div class=\"bg-white\" style=\"padding: 30px;\">
                            <div class=\"input-group\">
                                <input type=\"text\" class=\"form-control p-4\" placeholder=\"Keyword\">
                                <div class=\"input-group-append\">
                                    <span class=\"input-group-text bg-primary border-primary text-white\"><i
                                            class=\"fa fa-search\"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Category List -->
                    <div class=\"mb-5\">
                        <h4 class=\"text-uppercase mb-4\" style=\"letter-spacing: 5px;\">Categories</h4>
                        <div class=\"bg-white\" style=\"padding: 30px;\">
                            <ul class=\"list-inline m-0\">
                                <li class=\"mb-3 d-flex justify-content-between align-items-center\">
                                    <a class=\"text-dark\" href=\"#\"><i class=\"fa fa-angle-right text-primary mr-2\"></i>Web
                                        Design</a>
                                    <span class=\"badge badge-primary badge-pill\">150</span>
                                </li>
                                <li class=\"mb-3 d-flex justify-content-between align-items-center\">
                                    <a class=\"text-dark\" href=\"#\"><i class=\"fa fa-angle-right text-primary mr-2\"></i>Web
                                        Development</a>
                                    <span class=\"badge badge-primary badge-pill\">131</span>
                                </li>
                                <li class=\"mb-3 d-flex justify-content-between align-items-center\">
                                    <a class=\"text-dark\" href=\"#\"><i
                                            class=\"fa fa-angle-right text-primary mr-2\"></i>Online Marketing</a>
                                    <span class=\"badge badge-primary badge-pill\">78</span>
                                </li>
                                <li class=\"mb-3 d-flex justify-content-between align-items-center\">
                                    <a class=\"text-dark\" href=\"#\"><i
                                            class=\"fa fa-angle-right text-primary mr-2\"></i>Keyword Research</a>
                                    <span class=\"badge badge-primary badge-pill\">56</span>
                                </li>
                                <li class=\"d-flex justify-content-between align-items-center\">
                                    <a class=\"text-dark\" href=\"#\"><i
                                            class=\"fa fa-angle-right text-primary mr-2\"></i>Email Marketing</a>
                                    <span class=\"badge badge-primary badge-pill\">98</span>
                                </li>
                            </ul>
                        </div>
                    </div>
    
                    <!-- Recent Post -->
                    <div class=\"mb-5\">
                        <h4 class=\"text-uppercase mb-4\" style=\"letter-spacing: 5px;\">Recent Post</h4>
                        <a class=\"d-flex align-items-center text-decoration-none bg-white mb-3\" href=\"\">
                            <img class=\"img-fluid\" src=\"img/blog-100x100.jpg\" alt=\"\">
                            <div class=\"pl-3\">
                                <h6 class=\"m-1\">Diam lorem dolore justo eirmod lorem dolore</h6>
                                <small>Jan 01, 2050</small>
                            </div>
                        </a>
                        <a class=\"d-flex align-items-center text-decoration-none bg-white mb-3\" href=\"\">
                            <img class=\"img-fluid\" src=\"img/blog-100x100.jpg\" alt=\"\">
                            <div class=\"pl-3\">
                                <h6 class=\"m-1\">Diam lorem dolore justo eirmod lorem dolore</h6>
                                <small>Jan 01, 2050</small>
                            </div>
                        </a>
                        <a class=\"d-flex align-items-center text-decoration-none bg-white mb-3\" href=\"\">
                            <img class=\"img-fluid\" src=\"img/blog-100x100.jpg\" alt=\"\">
                            <div class=\"pl-3\">
                                <h6 class=\"m-1\">Diam lorem dolore justo eirmod lorem dolore</h6>
                                <small>Jan 01, 2050</small>
                            </div>
                        </a>
                    </div>
    
                    <!-- Tag Cloud -->
                    <div class=\"mb-5\">
                        <h4 class=\"text-uppercase mb-4\" style=\"letter-spacing: 5px;\">Tag Cloud</h4>
                        <div class=\"d-flex flex-wrap m-n1\">
                            <a href=\"\" class=\"btn btn-light m-1\">Design</a>
                            <a href=\"\" class=\"btn btn-light m-1\">Development</a>
                            <a href=\"\" class=\"btn btn-light m-1\">Marketing</a>
                            <a href=\"\" class=\"btn btn-light m-1\">SEO</a>
                            <a href=\"\" class=\"btn btn-light m-1\">Writing</a>
                            <a href=\"\" class=\"btn btn-light m-1\">Consulting</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->

  

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
        return "blog/blog.html.twig";
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
{% block title%}blog{% endblock %}
{% block body%}



    <!-- Blog Start -->
    <div class=\"container-fluid py-5\">
        <div class=\"container py-5\">
            <div class=\"row\">
                <div class=\"col-lg-8\">
                    <div class=\"row pb-3\">
                        <div class=\"col-md-6 mb-4 pb-2\">
                            <div class=\"blog-item\">
                                <div class=\"position-relative\">
                                    <img class=\"img-fluid w-100\" src=\"img/blog-1.jpg\" alt=\"\">
                                    <div class=\"blog-date\">
                                        <h6 class=\"font-weight-bold mb-n1\">01</h6>
                                        <small class=\"text-white text-uppercase\">Jan</small>
                                    </div>
                                </div>
                                <div class=\"bg-white p-4\">
                                    <div class=\"d-flex mb-2\">
                                        <a class=\"text-primary text-uppercase text-decoration-none\" href=\"\">Admin</a>
                                        <span class=\"text-primary px-2\">|</span>
                                        <a class=\"text-primary text-uppercase text-decoration-none\" href=\"\">Tours & Travel</a>
                                    </div>
                                    <a class=\"h5 m-0 text-decoration-none\" href=\"\">Dolor justo sea kasd lorem clita justo diam amet</a>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6 mb-4 pb-2\">
                            <div class=\"blog-item\">
                                <div class=\"position-relative\">
                                    <img class=\"img-fluid w-100\" src=\"img/blog-2.jpg\" alt=\"\">
                                    <div class=\"blog-date\">
                                        <h6 class=\"font-weight-bold mb-n1\">01</h6>
                                        <small class=\"text-white text-uppercase\">Jan</small>
                                    </div>
                                </div>
                                <div class=\"bg-white p-4\">
                                    <div class=\"d-flex mb-2\">
                                        <a class=\"text-primary text-uppercase text-decoration-none\" href=\"\">Admin</a>
                                        <span class=\"text-primary px-2\">|</span>
                                        <a class=\"text-primary text-uppercase text-decoration-none\" href=\"\">Tours & Travel</a>
                                    </div>
                                    <a class=\"h5 m-0 text-decoration-none\" href=\"\">Dolor justo sea kasd lorem clita justo diam amet</a>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6 mb-4 pb-2\">
                            <div class=\"blog-item\">
                                <div class=\"position-relative\">
                                    <img class=\"img-fluid w-100\" src=\"img/blog-3.jpg\" alt=\"\">
                                    <div class=\"blog-date\">
                                        <h6 class=\"font-weight-bold mb-n1\">01</h6>
                                        <small class=\"text-white text-uppercase\">Jan</small>
                                    </div>
                                </div>
                                <div class=\"bg-white p-4\">
                                    <div class=\"d-flex mb-2\">
                                        <a class=\"text-primary text-uppercase text-decoration-none\" href=\"\">Admin</a>
                                        <span class=\"text-primary px-2\">|</span>
                                        <a class=\"text-primary text-uppercase text-decoration-none\" href=\"\">Tours & Travel</a>
                                    </div>
                                    <a class=\"h5 m-0 text-decoration-none\" href=\"\">Dolor justo sea kasd lorem clita justo diam amet</a>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6 mb-4 pb-2\">
                            <div class=\"blog-item\">
                                <div class=\"position-relative\">
                                    <img class=\"img-fluid w-100\" src=\"img/blog-1.jpg\" alt=\"\">
                                    <div class=\"blog-date\">
                                        <h6 class=\"font-weight-bold mb-n1\">01</h6>
                                        <small class=\"text-white text-uppercase\">Jan</small>
                                    </div>
                                </div>
                                <div class=\"bg-white p-4\">
                                    <div class=\"d-flex mb-2\">
                                        <a class=\"text-primary text-uppercase text-decoration-none\" href=\"\">Admin</a>
                                        <span class=\"text-primary px-2\">|</span>
                                        <a class=\"text-primary text-uppercase text-decoration-none\" href=\"\">Tours & Travel</a>
                                    </div>
                                    <a class=\"h5 m-0 text-decoration-none\" href=\"\">Dolor justo sea kasd lorem clita justo diam amet</a>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6 mb-4 pb-2\">
                            <div class=\"blog-item\">
                                <div class=\"position-relative\">
                                    <img class=\"img-fluid w-100\" src=\"img/blog-2.jpg\" alt=\"\">
                                    <div class=\"blog-date\">
                                        <h6 class=\"font-weight-bold mb-n1\">01</h6>
                                        <small class=\"text-white text-uppercase\">Jan</small>
                                    </div>
                                </div>
                                <div class=\"bg-white p-4\">
                                    <div class=\"d-flex mb-2\">
                                        <a class=\"text-primary text-uppercase text-decoration-none\" href=\"\">Admin</a>
                                        <span class=\"text-primary px-2\">|</span>
                                        <a class=\"text-primary text-uppercase text-decoration-none\" href=\"\">Tours & Travel</a>
                                    </div>
                                    <a class=\"h5 m-0 text-decoration-none\" href=\"\">Dolor justo sea kasd lorem clita justo diam amet</a>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6 mb-4 pb-2\">
                            <div class=\"blog-item\">
                                <div class=\"position-relative\">
                                    <img class=\"img-fluid w-100\" src=\"img/blog-3.jpg\" alt=\"\">
                                    <div class=\"blog-date\">
                                        <h6 class=\"font-weight-bold mb-n1\">01</h6>
                                        <small class=\"text-white text-uppercase\">Jan</small>
                                    </div>
                                </div>
                                <div class=\"bg-white p-4\">
                                    <div class=\"d-flex mb-2\">
                                        <a class=\"text-primary text-uppercase text-decoration-none\" href=\"\">Admin</a>
                                        <span class=\"text-primary px-2\">|</span>
                                        <a class=\"text-primary text-uppercase text-decoration-none\" href=\"\">Tours & Travel</a>
                                    </div>
                                    <a class=\"h5 m-0 text-decoration-none\" href=\"\">Dolor justo sea kasd lorem clita justo diam amet</a>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6 mb-4 pb-2\">
                            <div class=\"blog-item\">
                                <div class=\"position-relative\">
                                    <img class=\"img-fluid w-100\" src=\"img/blog-1.jpg\" alt=\"\">
                                    <div class=\"blog-date\">
                                        <h6 class=\"font-weight-bold mb-n1\">01</h6>
                                        <small class=\"text-white text-uppercase\">Jan</small>
                                    </div>
                                </div>
                                <div class=\"bg-white p-4\">
                                    <div class=\"d-flex mb-2\">
                                        <a class=\"text-primary text-uppercase text-decoration-none\" href=\"\">Admin</a>
                                        <span class=\"text-primary px-2\">|</span>
                                        <a class=\"text-primary text-uppercase text-decoration-none\" href=\"\">Tours & Travel</a>
                                    </div>
                                    <a class=\"h5 m-0 text-decoration-none\" href=\"\">Dolor justo sea kasd lorem clita justo diam amet</a>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6 mb-4 pb-2\">
                            <div class=\"blog-item\">
                                <div class=\"position-relative\">
                                    <img class=\"img-fluid w-100\" src=\"img/blog-2.jpg\" alt=\"\">
                                    <div class=\"blog-date\">
                                        <h6 class=\"font-weight-bold mb-n1\">01</h6>
                                        <small class=\"text-white text-uppercase\">Jan</small>
                                    </div>
                                </div>
                                <div class=\"bg-white p-4\">
                                    <div class=\"d-flex mb-2\">
                                        <a class=\"text-primary text-uppercase text-decoration-none\" href=\"\">Admin</a>
                                        <span class=\"text-primary px-2\">|</span>
                                        <a class=\"text-primary text-uppercase text-decoration-none\" href=\"\">Tours & Travel</a>
                                    </div>
                                    <a class=\"h5 m-0 text-decoration-none\" href=\"\">Dolor justo sea kasd lorem clita justo diam amet</a>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-12\">
                            <nav aria-label=\"Page navigation\">
                                <ul class=\"pagination pagination-lg justify-content-center bg-white mb-0\" style=\"padding: 30px;\">
                                  <li class=\"page-item disabled\">
                                    <a class=\"page-link\" href=\"#\" aria-label=\"Previous\">
                                      <span aria-hidden=\"true\">&laquo;</span>
                                      <span class=\"sr-only\">Previous</span>
                                    </a>
                                  </li>
                                  <li class=\"page-item active\"><a class=\"page-link\" href=\"#\">1</a></li>
                                  <li class=\"page-item\"><a class=\"page-link\" href=\"#\">2</a></li>
                                  <li class=\"page-item\"><a class=\"page-link\" href=\"#\">3</a></li>
                                  <li class=\"page-item\">
                                    <a class=\"page-link\" href=\"#\" aria-label=\"Next\">
                                      <span aria-hidden=\"true\">&raquo;</span>
                                      <span class=\"sr-only\">Next</span>
                                    </a>
                                  </li>
                                </ul>
                              </nav>
                        </div>
                    </div>
                </div>
    
                <div class=\"col-lg-4 mt-5 mt-lg-0\">
                    <!-- Author Bio -->
                    <div class=\"d-flex flex-column text-center bg-white mb-5 py-5 px-4\">
                        <img src=\"img/user.jpg\" class=\"img-fluid mx-auto mb-3\" style=\"width: 100px;\">
                        <h3 class=\"text-primary mb-3\">John Doe</h3>
                        <p>Conset elitr erat vero dolor ipsum et diam, eos dolor lorem, ipsum sit no ut est  ipsum erat kasd amet elitr</p>
                        <div class=\"d-flex justify-content-center\">
                            <a class=\"text-primary px-2\" href=\"\">
                                <i class=\"fab fa-facebook-f\"></i>
                            </a>
                            <a class=\"text-primary px-2\" href=\"\">
                                <i class=\"fab fa-twitter\"></i>
                            </a>
                            <a class=\"text-primary px-2\" href=\"\">
                                <i class=\"fab fa-linkedin-in\"></i>
                            </a>
                            <a class=\"text-primary px-2\" href=\"\">
                                <i class=\"fab fa-instagram\"></i>
                            </a>
                            <a class=\"text-primary px-2\" href=\"\">
                                <i class=\"fab fa-youtube\"></i>
                            </a>
                        </div>
                    </div>
    
                    <!-- Search Form -->
                    <div class=\"mb-5\">
                        <div class=\"bg-white\" style=\"padding: 30px;\">
                            <div class=\"input-group\">
                                <input type=\"text\" class=\"form-control p-4\" placeholder=\"Keyword\">
                                <div class=\"input-group-append\">
                                    <span class=\"input-group-text bg-primary border-primary text-white\"><i
                                            class=\"fa fa-search\"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Category List -->
                    <div class=\"mb-5\">
                        <h4 class=\"text-uppercase mb-4\" style=\"letter-spacing: 5px;\">Categories</h4>
                        <div class=\"bg-white\" style=\"padding: 30px;\">
                            <ul class=\"list-inline m-0\">
                                <li class=\"mb-3 d-flex justify-content-between align-items-center\">
                                    <a class=\"text-dark\" href=\"#\"><i class=\"fa fa-angle-right text-primary mr-2\"></i>Web
                                        Design</a>
                                    <span class=\"badge badge-primary badge-pill\">150</span>
                                </li>
                                <li class=\"mb-3 d-flex justify-content-between align-items-center\">
                                    <a class=\"text-dark\" href=\"#\"><i class=\"fa fa-angle-right text-primary mr-2\"></i>Web
                                        Development</a>
                                    <span class=\"badge badge-primary badge-pill\">131</span>
                                </li>
                                <li class=\"mb-3 d-flex justify-content-between align-items-center\">
                                    <a class=\"text-dark\" href=\"#\"><i
                                            class=\"fa fa-angle-right text-primary mr-2\"></i>Online Marketing</a>
                                    <span class=\"badge badge-primary badge-pill\">78</span>
                                </li>
                                <li class=\"mb-3 d-flex justify-content-between align-items-center\">
                                    <a class=\"text-dark\" href=\"#\"><i
                                            class=\"fa fa-angle-right text-primary mr-2\"></i>Keyword Research</a>
                                    <span class=\"badge badge-primary badge-pill\">56</span>
                                </li>
                                <li class=\"d-flex justify-content-between align-items-center\">
                                    <a class=\"text-dark\" href=\"#\"><i
                                            class=\"fa fa-angle-right text-primary mr-2\"></i>Email Marketing</a>
                                    <span class=\"badge badge-primary badge-pill\">98</span>
                                </li>
                            </ul>
                        </div>
                    </div>
    
                    <!-- Recent Post -->
                    <div class=\"mb-5\">
                        <h4 class=\"text-uppercase mb-4\" style=\"letter-spacing: 5px;\">Recent Post</h4>
                        <a class=\"d-flex align-items-center text-decoration-none bg-white mb-3\" href=\"\">
                            <img class=\"img-fluid\" src=\"img/blog-100x100.jpg\" alt=\"\">
                            <div class=\"pl-3\">
                                <h6 class=\"m-1\">Diam lorem dolore justo eirmod lorem dolore</h6>
                                <small>Jan 01, 2050</small>
                            </div>
                        </a>
                        <a class=\"d-flex align-items-center text-decoration-none bg-white mb-3\" href=\"\">
                            <img class=\"img-fluid\" src=\"img/blog-100x100.jpg\" alt=\"\">
                            <div class=\"pl-3\">
                                <h6 class=\"m-1\">Diam lorem dolore justo eirmod lorem dolore</h6>
                                <small>Jan 01, 2050</small>
                            </div>
                        </a>
                        <a class=\"d-flex align-items-center text-decoration-none bg-white mb-3\" href=\"\">
                            <img class=\"img-fluid\" src=\"img/blog-100x100.jpg\" alt=\"\">
                            <div class=\"pl-3\">
                                <h6 class=\"m-1\">Diam lorem dolore justo eirmod lorem dolore</h6>
                                <small>Jan 01, 2050</small>
                            </div>
                        </a>
                    </div>
    
                    <!-- Tag Cloud -->
                    <div class=\"mb-5\">
                        <h4 class=\"text-uppercase mb-4\" style=\"letter-spacing: 5px;\">Tag Cloud</h4>
                        <div class=\"d-flex flex-wrap m-n1\">
                            <a href=\"\" class=\"btn btn-light m-1\">Design</a>
                            <a href=\"\" class=\"btn btn-light m-1\">Development</a>
                            <a href=\"\" class=\"btn btn-light m-1\">Marketing</a>
                            <a href=\"\" class=\"btn btn-light m-1\">SEO</a>
                            <a href=\"\" class=\"btn btn-light m-1\">Writing</a>
                            <a href=\"\" class=\"btn btn-light m-1\">Consulting</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->

  

{% endblock %}", "blog/blog.html.twig", "/home/alumno/ieselcaminas-classroom-2daw-25-26-web-personal-ii-repositorio/templates/blog/blog.html.twig");
    }
}
