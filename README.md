<p>#COMUNICADOS</p>
<ul>
<li>
<p>Después de descargar el proyecto entramos a este.</p>
<pre><code>  $ cd nombreRepositorio
</code></pre>
</li>
<li>
<p>Ejecutamos el siguiente comando.</p>
<pre><code>  $ composer install
</code></pre>
</li>
<li>
<p>Modificamos el nombre del archivo <strong>.env.example.</strong> por <strong>.env</strong> y agregamos nuestras credenciales.</p>
</li>
<li>
<p>Por ultimo solo debemos generar una key para nuestra app.</p>
<pre><code>   $ php artisan key:generate
</code></pre>
</li>
<li>
<p>Listo ya podemos ejecutar el proyecto Cinema.</p>
<pre><code>  $ php artisan serve
</code></pre>
</li>
</ul>
