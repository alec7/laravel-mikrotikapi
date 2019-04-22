# laravel-mikrotikapi

<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Instructions

<pre><b>Add Namespace Class Your Controller:</b></pre>
<pre><code>use Routerboard\Arjeapi\RouterOs;</code> </pre>
<pre><b>Get Mikrotik  Interfaces Lists. Add this code to your function:</b></pre>
<pre>
<code>
$ArjeAPI = new RouterOs();

$ArjeAPI->debug = false;

if ($ArjeAPI->connect('Your Router Ip Address', 'Login', 'Password')) {

   $ArjeAPI->write('/interface/getall');

   $READ = $ArjeAPI->read(false);
   $GetInterface = $ArjeAPI->parseResponse($READ);
    
   return $GetInterface;
  
}
</code>
</pre>
