<h1>this is home page</h1>

@include('common.header');
@include('common.inner', ['data' => 'this is inner data']);
<!-- if file not found then it will not throw error -->
@includeIf('common.notfound');

<x-message-banner msg="User Login Successful" class="success" />
<x-message-banner msg="User Signup Successful" class="success"  />

<br>
<br>
<br>
<x-message-banner msg="Invalid password. Please try again."  class="error" />
<x-message-banner msg="Invalid password. Please try again."  class="warning" />
