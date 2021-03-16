$(document).ready(function () {
    
    //registration login and reset password switch
    $('#signup_btn').click(function (e) { 
        e.preventDefault();
        $('#login_form').hide();
        $('#resetpass').hide();
        $('#signup_form').show();
    });
    $('.login_btn').click(function (e) { 
        e.preventDefault(); 
        $('#signup_form').hide();
        $('#resetpass').hide();
        $('#login_form').show();
        
    });
    $('#resetpass_btn').click(function (e) { 
        e.preventDefault();
        $('#signup_form').hide();
        $('#login_form').hide();
        $('#resetpass').show();
    });

    // Investment plans selectors
    let investment = $('#investment').val();
    if (investment == 'bitcoin') {
        $('#plan')
        .append('<option value="beginner">Beginner</option>')
        .append('<option value="standerd">Standerd</option>')
        .append('<option value="premium">Premium</option>')
        .append('<option value="platinum">Platinum</option>')
        .append('<option value="gold">Gold</option>');
        
    }else if (investment == 'oil') {
        $('#plan')
        .append('<option value="standerd">Standerd</option>')
        .append('<option value="premium">Premium</option>')
        .append('<option value="gold">Gold</option>');

    }else if (investment == 'gold') {
        $('#plan')
        .append('<option value="gold" selected>Gold</option>');
        
    }else if (investment == 'real_estate') {
        $('#plan')
        .append('<option value="real_estate" selected>Real Estate</option>');
        
    }
});