O que NÃO cai no teste Classes ou extensões externas provenientes da PEAR/ Pyrus ou PECL (CodeSniffer, PhpDocumentor, xDebug, profiler, GD, Phing, fPDF), ou vindo de outros repositórios como a PHPUnit, Composer (gerenciador de dependências), Suhosin (sistema de segurança em PHP), sistemas para controle de versão (CVS, Subversion, Git, Mercurial), empacotamento PHAR, procedimentos para Integração Contínua com Jenkins (e seus módulos como PHPMD-MessDetector, DRY-Copy& Paste Detector, PHP_Depend), sistema de templates (Smarty e Twig), PHP-GTK, Frameworks (Laravel, CakePHP, CodeIgniter, Symfony, ZendFramework, YII, Prado), CMS (TYPO3, Wordpress, Joomla!, Drupal), sistemas especializados (Magento, SugarCRM ou phpMyAdmin), editores (ZendStudio, NetBeans, PDT, Aptana, PhpED), mecanismos de cache (APC, Memcache e Gearman), ORM6 (Propel, Doctrine ou Eloquent), funções SQL específicas de algum banco de dados (que não sejam ANSI SQL), AdoDB, easter eggs7, bases NoSQL e ferramentas Zend como Zend Z-Ray, Zend Java Bridge, Zend Guard Loader e outras bibliotecas de apoio (como por exemplo a extensão filter).

Ari Stopassola Junior. Preparatório para a certificação PHP (Locais do Kindle 470-479). leanpub.com. 

Jamais haverão questões abordando nuances do PHP sob Windows ou salientando alguma versão específica de plataforma Linux. É dito que as perguntas são agnósticas com relação a plataforma.

Ari Stopassola Junior. Preparatório para a certificação PHP (Locais do Kindle 637-638). leanpub.com. 
--------

Cai no Teste

marcações HTML e CSS, formato na qual as telas geradas serão renderizadas nos navegadores web. O protocolo HTTP também é requerido, pois trata da “conversa” entre o navegador e servidor. É fundamental possuir conhecimentos em SQL (Structured Query Language) que é a linguagem universal de acesso à banco de dados relacionais. Lembrando que o SQL utilizado na prova é o padrão ANSI (que funcione em qualquer Gerenciador de Banco de Dados Relacional). JavaScript também é um recurso importantíssimo pois são scripts que rodam no lado do cliente (client side) e promovem uma melhor interatividade com o sistema ou página web.

Ari Stopassola Junior. Preparatório para a certificação PHP (Locais do Kindle 481-486). leanpub.com.

--------

Armadilhas

Funções de conversão: to ou 2, com ou sem _ (underscore):

cal_to_jd 
ftok 
idn_to_ascii 
idn_to_unicode 
idn_to_utf8 
strtok 
strtolower 
strtotime 
strtoupper 

bin2hex 
deg2rad
image2wbmp
nl2br 
rad2deg 
ip2long 
jpeg2wbmp 
long2ip 
px_timestamp2string

Ari Stopassola Junior. Preparatório para a certificação PHP (Locais do Kindle 497-501). leanpub.com. 

---------------------

funções case insensitive (tolerante a letras maiúsculas e minúsculas), utilizando i versus case:

strpos stripos
str_replace str_ireplace 
strcmp strcasecmp

Ari Stopassola Junior. Preparatório para a certificação PHP (Locais do Kindle 505-507). leanpub.com. 

---------------------
inconsistências para nomenclatura de funções:

  

| Objeto/verbo          | Verbo/objeto    |
|-----------------------|-----------------|
| socket_read            | readdir         |
| ldap_read              | readfile        |
| date_parse             | parse_str       |
| xml_parse              | parse_url       |
| imap_check             | checkdnsrr      |
| pspell_check           | checkdate       |
| timezone_version_get   | getheaders      |
| realpath_cache_get     | getcwd          |
| ini_get                | etenv           |
             
Ari Stopassola Junior. Preparatório para a certificação PHP (Locais do Kindle 508-517). leanpub.com. 

------------------
underscore é outra armadilha que deve ser observada com muitíssima atenção:

| Com underscore | Sem underscore |
|----------------|----------------|
| json_decode    | urldecode      |
| base64_decode  | gzdecode       |
| error_get_last | fgetcsv        |
| func_get_arg   | gethostname    |
| str_pad        | strlen         |
| str_split      | strptime       |
| str_replace    | strrev         |
| str_getcsv     | stristr        |

--------------------

Meta-caracter Equivalência
\d Número de 0-9 
\D Tudo exceto número de 0-9 
\s Qualquer espaço, tabulação e nova linha 
\S Tudo exceto espaço, tabulação e nova linha 
\w Qualquer alfanumérico e _ (underscore) 
\W Tudo exceto alfanumérico e _ (underscore)

Ari Stopassola Junior. Preparatório para a certificação PHP (Locais do Kindle 654-658). leanpub.com. 






















