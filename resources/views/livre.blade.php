<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register - Free Bulma template</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;500;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/15181efa86.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unpkg.com/bulma@0.9.0/css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="../css/register.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="css/assets/css/fresh-bootstrap-table.css" rel="stylesheet" />
  <link href="css/assets/css/demo.css" rel="stylesheet" />

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <link href="http://fonts.googleapis.com/css?family=Roboto:400,700,300" rel="stylesheet" type="text/css">

  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://unpkg.com/bootstrap-table/dist/bootstrap-table.min.js"></script>
    <script src="js/assets/js/demo/gsdk-switch.js"></script>
  <script src="js/assets/js/demo/jquery.sharrre.js"></script>
  <script src="js/assets/js/demo/demo.js"></script>
  </head>

  <body>
    <section class="container">
      <div class="columns is-multiline">
   
        <div class="column is-8 is-offset-2 register">
        <table id="fresh-table" class="table">
        <thead>
            <tr>
            <th>libelle</th>
      <th>code</th>
      <th>description</abbr></th>
      <th>image</th>
      <th>livre</th>
      <th>delete</th>
      <th>update</th>
            </tr>
        </thead>
        <tbody>
        <?php 
         use App\Models\LivreAModel;
  
 
 
 
  $Livreaffichers = LivreAModel::paginate(2);
  
  
  foreach($Livreaffichers as $livreafficher) {
    
    echo  "<tr><td>".$livreafficher->code."</td>";
   echo  "<td>".$livreafficher->description."</td>";
   echo  "<td>".$livreafficher->libelle."</td>";
   echo  "<td><a href='/imagelivre/$livreafficher->id'>regarder</a></th>";
   echo  "<td><a href='/lirelivre/$livreafficher->id'>lire</a></td>";
   echo  "<td><a href='/supprimerlivre/$livreafficher->id'>delete</a></td>";
   echo  "<td><a href='/updatelivre/$livreafficher->id'>modifier</a></td>";
   "</tr>";
   
  }
   ?>   
        
        </tbody>
        <tfoot>
         

        </tfoot>
    </table>
    <span>
{{$Livreaffichers->links()}}
</span>
<style>
  .w-5{
    display:none
  }
  </style>
          <div class="columns">
           
            <div class="column right has-text-centered">
              <h1 class="title is-4">Ajouter un livre</h1>
              <p class="description">Ajouter les information du livre </p>

              <form method="post" action="/downloadlivre" enctype="multipart/form-data">
             
            {{ csrf_field() }}

                <div class="field">
                  <div class="control">
                    <input class="input is-medium" type="text" name="code" placeholder="code">
                    @if($errors->has('code'))
                    <p class="subtitle colored is-4">{{$errors->first('code')}}</p>
                    @endif
                  </div>
                </div>

                <div class="field">
                  <div class="control">
                    <input class="input is-medium" type="text" name="libelle" placeholder="libelle">
                    @if($errors->has('libelle'))
                    <p class="subtitle colored is-4">{{$errors->first('libelle')}}</p>
                    @endif
                  </div>
                </div>
                
                <div class="field">
                  <div class="control">
                    <input class="input is-medium" type="text" name="description" placeholder="description">
                    @if($errors->has('description'))
                    <p class="subtitle colored is-4">{{$errors->first('description')}}</p>
                    @endif
                  </div>
                </div>
                <div class="field">
                  <div class="control">
                    <input class="input is-medium" type="file" name="image" placeholder="image du livre">
                    @if($errors->has('description'))
                    <p class="subtitle colored is-4">{{$errors->first('description')}}</p>
                    @endif
                  </div>
                </div>
                <div class="field">
                  <div class="control">
                    <input class="input is-medium" type="file" name="video" placeholder="description">
                    @if($errors->has('description'))
                    <p class="subtitle colored is-4">{{$errors->first('description')}}</p>
                    @endif
                  </div>
                </div>
                
                <button class="button is-block is-primary is-fullwidth is-medium">Submit</button>
                <br />
                <small><em>.</em></small>
              </form>
            </div>
          </div>
        </div>
        <div class="column is-8 is-offset-2">
          <br>
          <nav class="level">
            <div class="level-left">
              <div class="level-item">
                <span class="icon">
                  <i class="fab fa-twitter"></i>
                </span> &emsp;
                <span class="icon">
                  <i class="fab fa-facebook"></i>
                </span> &emsp;
                <span class="icon">
                  <i class="fab fa-instagram"></i>
                </span> &emsp;
                <span class="icon">
                  <i class="fab fa-github"></i>
                </span> &emsp;
                <span class="icon">
                  <i class="fas fa-envelope"></i>
                </span>
              </div>
            </div>
            <div class="level-right">
              <small class="level-item" style="color: var(--textLight)">
                &copy; Super Cool Website. All Rights Reserved.
              </small>
            </div>
          </nav>
        </div>
      </div>
    </section>
  </body>
  <style>
    :root {
      --brandColor: hsl(166, 67%, 51%);
      --background: rgb(247, 247, 247);
      --textDark: hsla(0, 0%, 0%, 0.66);
      --textLight: hsla(0, 0%, 0%, 0.33);
    }

    body {
      background: var(--background);
      height: 100vh;
      color: var(--textDark);
    }

    .field:not(:last-child) {
      margin-bottom: 1rem;
    }

    .register {
      margin-top: 10rem;
      background: white;
      border-radius: 10px;
    }

    .left,
    .right {
      padding: 4.5rem;
    }

    .left {
      border-right: 5px solid var(--background);
    }

    .left .title {
      font-weight: 800;
      letter-spacing: -2px;
    }

    .left .colored {
      color: var(--brandColor);
      font-weight: 500;
      margin-top: 1rem !important;
      letter-spacing: -1px;
    }

    .left p {
      color: var(--textLight);
      font-size: 1.15rem;
    }

    .right .title {
      font-weight: 800;
      letter-spacing: -1px;
    }

    .right .description {
      margin-top: 1rem;
      margin-bottom: 1rem !important;
      color: var(--textLight);
      font-size: 1.15rem;
    }

    .right small {
      color: var(--textLight);
    }

    input {
      font-size: 1rem;
    }

    input:focus {
      border-color: var(--brandColor) !important;
      box-shadow: 0 0 0 1px var(--brandColor) !important;
    }

    .fab,
    .fas {
      color: var(--textLight);
      margin-right: 1rem;
    }

  </style>
 <script type="text/javascript">
    var $table = $('#fresh-table')
    var $alertBtn = $('#alertBtn')

    window.operateEvents = {
      'click .like': function (e, value, row, index) {
     
       
      },
      'click .edit': function (e, value, row, index) {
     
     
      },
      'click .remove': function (e, value, row, index) {
        $table.bootstrapTable('remove', {
          field: 'id',
          values: [row.id]
        })
      }
    }

    function operateFormatter(value, row, index) {
      return [
        '<a rel="tooltip" title="Like" class="table-action like" href="javascript:void(0)" title="Like">',
          '<i class="fa fa-heart"></i>',
        '</a>',
        '<a rel="tooltip" title="Edit" class="table-action edit" href="javascript:void(0)" title="Edit">',
          '<i class="fa fa-edit"></i>',
        '</a>',
        '<a rel="tooltip" title="Remove" class="table-action remove" href="javascript:void(0)" title="Remove">',
          '<i class="fa fa-remove"></i>',
        '</a>'
      ].join('')
    }

    $(function () {
      $table.bootstrapTable({
        classes: 'table table-hover table-striped',
        toolbar: '.toolbar',

        search: true,
        showRefresh: true,
        showToggle: true,
        showColumns: true,
        pagination: true,
        striped: true,
        sortable: true,
        pageSize: 8,
        pageList: [8, 10, 25, 50, 100],

        formatShowingRows: function (pageFrom, pageTo, totalRows) {
          return ''
        },
        formatRecordsPerPage: function (pageNumber) {
          return pageNumber + ' rows visible'
        }
      })

      $alertBtn.click(function () {
        alert('You pressed on Alert')
      })
    })

    $('#sharrreTitle').sharrre({
      share: {
        twitter: true,
        facebook: true
      },
      template: '',
      enableHover: false,
      enableTracking: true,
      render: function (api, options) {
        $("#sharrreTitle").html('Thank you for ' + options.total + ' shares!')
      },
      enableTracking: true,
      url: location.href
    })

    $('#twitter').sharrre({
      share: {
        twitter: true
      },
      enableHover: false,
      enableTracking: true,
      buttons: { twitter: {via: 'CreativeTim'}},
      click: function (api, options) {
        api.simulateClick()
        api.openPopup('twitter')
      },
      template: '<i class="fa fa-twitter"></i> {total}',
      url: location.href
    })

    $('#facebook').sharrre({
      share: {
        facebook: true
      },
      enableHover: false,
      enableTracking: true,
      click: function (api, options) {
        api.simulateClick()
        api.openPopup('facebook')
      },
      template: '<i class="fa fa-facebook-square"></i> {total}',
      url: location.href
    })
  </script>

  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga')

    ga('create', 'UA-46172202-1', 'auto')
    ga('send', 'pageview')

  </script>
</html>