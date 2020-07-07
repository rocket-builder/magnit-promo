

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

function getCards(range) {
  $.ajax({
    url:"php/controllers/card-get-controller.php",
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

function addRegion(region) {
  $.ajax({
    url:"php/controllers/region-add-controller.php",
    type:"POST",
    data: {region: region},
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

function deleteRegion(region) {
  $.ajax({
    url:"php/controllers/region-delete-controller.php",
    type:"POST",
    data: {region: region},
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

function getRanges() {
  $.ajax({
    url:"php/controllers/range-get-controller.php",
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

function deleteRanges(range) {
  $.ajax({
    url:"php/controllers/range-delete-controller.php",
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
