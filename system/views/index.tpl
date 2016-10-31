<h1>{$heading}</h1>

INDEX.TPL

<ul>
{foreach $results as $result}
  <li>
    {$result['name']}
  </li>
{/foreach}
</ul>