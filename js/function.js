
//Buscar Endereço pelo CEP Usuario
$(document).ready(function() {
    function clean_form_cep() {
                // Limpa valores do formulário de cep.
                $("#address").val("");
                $("#district").val("");
                $("#city").val("");
                $("#state").val("");
            }
            //Quando o campo cep perde o foco.
            $("#cep").blur(function() {
                //Nova variável "cep" somente com dígitos.
                var cep = $(this).val().replace(/\D/g, '');
                //Verifica se campo cep possui valor informado.
                if (cep != "") {
                    //Expressão regular para validar o CEP.
                    var validatecep = /^[0-9]{8}$/;
                    //Valida o formato do CEP.
                    if(validatecep.test(cep)) {
                        //Preenche os campos com "..." enquanto consulta webservice.
                        $("#address").val("...");
                        $("#district").val("...");
                        $("#city").val("...");
                        $("#state").val("...");
                        //$("#compl").val("...");
                        //$("#phone1").val("...");
                        //$("#phone2").val("...");
                        //Consulta o webservice viacep.com.br/
                        $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(data) {

                            if (!("erro" in data)) {
                                //Atualiza os campos com os valores da consulta.
                                $("#address").val(data.logradouro);
                                $("#district").val(data.bairro);
                                $("#city").val(data.localidade);
                                $("#state").val(data.uf);
                                
                            } //end if.
                            else {
                                //CEP pesquisado não foi encontrado.
                                clean_form_cep();
                                alert("CEP not found.");
                            }
                        });
                    } //end if.
                    else {
                        //cep é inválido.
                        clean_form_cep();
                        alert("Invalid CEP format.");
                    }
                } //end if.
                else {
                    //cep sem valor, limpa formulário.
                    clean_form_cep();
                }
            });
        });
//Buscar Endereço pelo CEP School
$(document).ready(function() {

    function clean_form_cep() {
                // Limpa valores do formulário de cep.
                $("#addressSchool").val("");
                $("#districtSchool").val("");
                $("#citySchool").val("");
                $("#stateSchool").val("");

            }
            //Quando o campo cep perde o foco.
            $("#cepSchool").blur(function() {
                //Nova variável "cep" somente com dígitos.
                var cep = $(this).val().replace(/\D/g, '');
                //Verifica se campo cep possui valor informado.
                if (cep != "") {
                    //Expressão regular para validar o CEP.
                    var validatecep = /^[0-9]{8}$/;
                    //Valida o formato do CEP.
                    if(validatecep.test(cep)) {
                        //Preenche os campos com "..." enquanto consulta webservice.
                        $("#addressSchool").val("...");
                        $("#districtSchool").val("...");
                        $("#citySchool").val("...");
                        $("#stateSchool").val("...");
                        //$("#compl").val("...");
                        //$("#phone1").val("...");
                        //$("#phone2").val("...");
                        //Consulta o webservice viacep.com.br/
                        $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(data) {

                            if (!("erro" in data)) {
                                //Atualiza os campos com os valores da consulta.
                                $("#addressSchool").val(data.logradouro);
                                $("#districtSchool").val(data.bairro);
                                $("#citySchool").val(data.localidade);
                                $("#stateSchool").val(data.uf);
                                
                            } //end if.
                            else {
                                //CEP pesquisado não foi encontrado.
                                clean_form_cep();
                                alert("CEP not found.");
                            }
                        });
                    } //end if.
                    else {
                        //cep é inválido.
                        clean_form_cep();
                        alert("Invalid CEP format.");
                    }
                } //end if.
                else {
                    //cep sem valor, limpa formulário.
                    clean_form_cep();
                }
            });
        });
//Confirmar senha
$(document).ready(function(){

    $("#cpass").blur(function(){
        var password = $("#pass").val();
        var confirm_password = $("#cpass").val();
        if(password != confirm_password){
            alert("Password not confirmed!");
            $("#cpass").val("");
            $("#cpass").attr("placeholder", "Different password").placeholder; 
        }
    });

    $("#cpassSchool").blur(function(){
        var password = $("#passSchool ").val();
        var confirm_password = $("#cpassSchool").val();
        if(password != confirm_password){
            alert("Password not confirmed!");
            $("#cpassSchool").val("");
            $("#cpassSchool").attr("placeholder", "Different password").placeholder; 
        }
    });
});

(function(angular) {
  'use strict';
angular.module('switchExample', ['ngAnimate'])
  .controller('GradeController', ['$scope', function($scope) {
    $scope.items = ['Elementary School', 'Middle School', 'High School'];
    //$scope.selection = $scope.items[0];
  }]);
})(window.angular);


