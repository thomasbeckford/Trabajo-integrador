

          swal({
            title: '<h2 style="text-decoration: underline">Advertencia<h2><p style="font-size:20px"></p>',
            html:'Pagina en construccion.<br><br> ' +
            'Es posible que encuentre funcionalidades inactivas. <br><br>',
            width: 300,
            type: 'info',
            padding: 20,
            animation: false,
            customClass: 'animated flip',
            background: '#fff url(//bit.ly/1Nqn9HU)'

            // el swall es hasta aca.. hay un bug de una promesa.. entonces sigue abajo ..

          }).then(function () {
          
          }, function (dismiss) {
            // dismiss can be 'cancel', 'overlay',
            // 'close', and 'timer'
            if (dismiss === 'cancel') {
              swal(
                'Cancelled',
                'Your imaginary file is safe :)',
                'error'
              )
            }
          })
