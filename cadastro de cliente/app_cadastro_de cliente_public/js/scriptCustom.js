   class Cep {
            constructor (){
                this._logradouro;
                this._complemento;
                this._bairro;
                this._localidade;
                this._ddd;
            }
               get logradouro(){
                return this._logradouro;
            }
            set logradouro(logradouro){
                this._logradouro = logradouro;
            }
              get complemento(){
                return this._complemento;
            }
            set complemento(complemento){
                this._complemento = complemento;
            }

            get bairro(){
                return this._bairro;
            }
            set bairro(bairro){
                this._bairro = bairro;
            }
             get localidade(){
                return this._localidade;
            }
            set localidade(localidade){
                this._localidade = localidade;
            }

             get ddd(){
                return this._ddd;
            }
            set ddd(ddd){
                this._ddd = ddd;
            }

         }

          function buscarCep(){

            let cep = document.getElementById('cepUsuario').value;

            let url = `https://viacep.com.br/ws/${cep}/json/`

            let xhttp = new XMLHttpRequest();
            xhttp.open("GET", url, false);

            xhttp.send();//A execução do script pára aqui até a requisição retornar do servidor

            n = xhttp.responseText;

            let novoCep = new Cep();
            novoCep.logradouro = JSON.parse(n).logradouro
            novoCep.complemento = JSON.parse(n).complemento
            novoCep.bairro = JSON.parse(n).bairro
            novoCep.localidade = JSON.parse(n).localidade
            novoCep.ddd = JSON.parse(n).ddd


           let logradouro = document.getElementById('logradouroUsuario').value = novoCep.logradouro
           let complemento = document.getElementById('complementoUsuario').value = novoCep.complemento
           let bairro = document.getElementById('bairroUsuario').value = novoCep.bairro
           let localidade = document.getElementById('localidadeUsuario').value = novoCep.localidade
           let ddd = document.getElementById('dddUsuario').value = novoCep.ddd

        }

 



    /*
    mascaras
    */
  $(document).ready(function(){
  $('.date').mask('00/00/0000');
  $('.time').mask('00:00:00');
  $('.date_time').mask('00/00/0000 00:00:00');
  $('#cepUsuario').mask('00000-000');
  $('.phone').mask('0000-0000');
  $('#telefoneUsuario').mask('(00) 0000-00000');
  $('.phone_us').mask('(000) 000-0000');
  $('.mixed').mask('AAA 000-S0S');
  $('#cpfUsuario').mask('000.000.000-00', {reverse: true});
  $('.cnpj').mask('00.000.000/0000-00', {reverse: true});
  $('.money').mask('000.000.000.000.000,00', {reverse: true});
  $('.money2').mask("#.##0,00", {reverse: true});
  $('.ip_address').mask('0ZZ.0ZZ.0ZZ.0ZZ', {
    translation: {
      'Z': {
        pattern: /[0-9]/, optional: true
      }
    }
  });
  $('.ip_address').mask('099.099.099.099');
  $('.percent').mask('##0,00%', {reverse: true});
  $('.clear-if-not-match').mask("00/00/0000", {clearIfNotMatch: true});
  $('.placeholder').mask("00/00/0000", {placeholder: "__/__/____"});
  $('.fallback').mask("00r00r0000", {
      translation: {
        'r': {
          pattern: /[\/]/,
          fallback: '/'
        },
        placeholder: "__/__/____"
      }
    });
  $('.selectonfocus').mask("00/00/0000", {selectOnFocus: true});
});



        