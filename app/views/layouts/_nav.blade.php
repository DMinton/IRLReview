<div class="navbar navbar-default navbar-fixed-top">

  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    {{ link_to_action('HomeController@index', 'IRL Review', array() ,array('class' => 'navbar-brand')) }}
  </div>
  <div class="collapse navbar-collapse navbar-right" id="navbar-collapse">
    <ul class="nav navbar-nav">

      <li>{{ link_to_action('HomeController@about', 'About') }}</li>
      
      @if(Auth::check())
        <li>{{ link_to_action('SessionController@destroy', 'Logout') }}</li>
      @else
        <li>{{ link_to_action('UserController@create', 'Signup') }}</li>
        <li>{{ link_to_action('SessionController@create', 'Login') }}</li>
      @endif
      
    </ul>
  </div>
</div>