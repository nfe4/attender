<template>
  <div class="page no-toolbar no-navbar no-swipeback login-screen-page">
    <div class="page-content login-screen-content">
      <div class="login-screen-title">Framework7</div>
      <form>
        <div class="list">
          <ul>
            <li class="item-content item-input item-input-with-value">
              <div class="item-inner">
                <div class="item-title item-label">Username</div>
                <div class="item-input-wrap">
                  <input type="text" placeholder="Your username" id="demo-username-2" class="input-with-value" />
                  <span class="input-clear-button"></span>
                </div>
              </div>
            </li>
            <li class="item-content item-input">
              <div class="item-inner">
                <div class="item-title item-label">Password</div>
                <div class="item-input-wrap">
                  <input type="password" placeholder="Your password" id="demo-password-2" class="" />
                </div>
              </div>
            </li>
          </ul>
        </div>
        <div class="list">
          <ul>
            <li><a href="#" class="list-button" @click=${signIn}>Sign In</a></li>
          </ul>
          <div class="block-footer">Some text about login information.<br />Lorem ipsum dolor sit amet, consectetur
            adipiscing elit.</div>
        </div>
      </form>
    </div>
  </div>
</template>
<script>
  export default (props, { $, $f7, $f7router }) => {
    const signIn = () => {
      let username = $('input#demo-username-2').val();
      let password = $('input#demo-password-2').val();
      $f7.dialog.alert('Username: ' + username + '<br />Password: ' + password, function () {
        $f7.loginScreen.close();
        $f7router.back();
      })
    }

    return $render;
  };

</script>
