

function login(login, password) {
  $.ajax({
    url:"php/controllers/login-controller.php",
    type:"POST",
    data: {login: login, password: password},
    success: function(response) {
      console.log(response);
      response = $.parseJSON(response);

      console.log(response);
    },
    error: function(error) {
      console.log(error);
    }
  });
}

function signin(login, password, region) {
  $.ajax({
    url:"php/controllers/signin-controller.php",
    type:"POST",
    data: {login: login, password: password, region: region},
    success: function(response) {
      console.log(response);
      response = $.parseJSON(response);

      console.log(response);
    },
    error: function(error) {
      console.log(error);
    }
  });
}

function logout() {
  $.ajax({
    url:"php/controllers/logout-controller.php",
    type:"POST",
    data: {},
    success: function(response) {
      console.log(response);
      response = $.parseJSON(response);

      console.log(response);
    },
    error: function(error) {
      console.log(error);
    }
  });
}

function generate(range) {
  $.ajax({
    url:"php/controllers/card-add-controller.php",
    type:"POST",
    data: {range: range},
    success: function(response) {
      console.log(response);
      response = $.parseJSON(response);

      console.log(response);
    },
    error: function(error) {
      console.log(error);
    }
  });
}

function getQR(id) {
  $.ajax({
    url:"php/controllers/qr-controller.php",
    type:"POST",
    data: {id: id},
    success: function(response) {
      console.log(response);
      response = $.parseJSON(response);
      console.log(response);

      if(!response.isError) $('#qr').attr('src', response.content['url']);
    },
    error: function(error) {
      console.log(error);
    }
  });
}
