<?php
  use yii\helpers\Html;
  use yii\helpers\url;
  use app\assets\CmsAsset;

  CmsAsset::register($this);
  
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Area | Dashboard</title>
    
  <!--  <script src="http://cdn.ckeditor.com/4.6.1/standard/ckeditor.js"></script> !-->
  </head>
  <body>

    
     <style>
    html, body {
        position: relative;
        height: 100%;
    }
    body {
        background: #3A5169;
        font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
        font-size: 14px;
        color:#000;
        margin: 0;
        padding: 0;
    }
 
  </style>
 

    <header id="header">
      <div class="container">
        <div class="row">
          <div class="col-md-10">
            <h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> CMS <small>Royal Literary Fund</small></h1>
          </div>
        </div>
      </div>
    </header>

    <section id="breadcrumb">
      <div class="container">
        <ol class="breadcrumb">
          <li class="active">Home</li>
        </ol>
      </div>
    </section>

    <section id="main">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="list-group">
              <a href="index.html" class="list-group-item active main-color-bg">
                <span class="glyphicon glyphicon-dashboard" aria-hidden="true"></span> Overview
              </a>
              <a href="<?= Url::to(['steps/index']) ; ?>" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Steps <span class="badge"><?php echo count($steps) ; ?></span></a>
              <?php if (Yii::$app->user->identity->id ==  '1') : ?>
              <a href="<?= Url::to(['rlfuser/index']) ; ?>" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Users <span class="badge"><?php echo count($users) ; ?></span></a>
            <?php endif; ?>
            </div>

            
          </div>
          <div class="col-md-9">
            <!-- Website Overview -->
            <div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard</h3>
              </div>
              <div class="panel-body">
                  <div class="col-md-3">
                  <div class="well dash-box">
                    <h2><a href="<?= Url::to(['steps/create']) ; ?>" ><span class="glyphicon glyphicon-edit" aria-hidden="true"></span>  <h4> create step</h4></a></h2>
                  </div>
                  </div>
                <div class="col-md-3">
                  <div class="well dash-box">
                    <h2><a href="<?= Url::to(['steps/index']) ; ?>" ><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>  <span class="badge"><?php echo count($steps) ; ?></span><h4> Manage Steps</h4></a></h2>
                  </div>
                </div>
                <?php if (Yii::$app->user->identity->id ==  '1') : ?>
                 <div class="col-md-3">
                  <div class="well dash-box">
                    <h2><a href="<?= Url::to(['rlfuser/create']) ; ?>" ><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> <h4> create User</h4></a></h2>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="well dash-box">
                    <h2><a href="<?= Url::to(['rlfuser/index']) ; ?>" ><span class="glyphicon glyphicon-user" aria-hidden="true"></span>  <span class="badge"><?php echo count($users) ; ?></span><h4> Manage Users</h4></a></h2>
                  </div>
                </div>
                <?php endif; ?>
                <div class="col-md-3">
                  <div class="well dash-box">
                    <h2><a href="<?= Url::to(['site/logout']) ; ?>" data-method="post"><span class="glyphicon glyphicon-off" aria-hidden="true"></span> <h4> Logout </h4></a></h2>
                  </div>
                </div>
              </div>
              </div>

              <!-- Latest Users -->
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h3 class="panel-title">Latest Users</h3>
                </div>
                <div class="panel-body">
                  <table class="table table-striped table-hover">
                      <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Joined</th>
                      </tr>
                      <?php foreach($users as $user) : ?>
                        <tr>
                          <td><?php echo $user['Name'] ; ?></td>
                          <td><?php echo $user['Email'] ; ?></td>
                          <td><?php echo $user['date_joined'] ; ?></td>
                        </tr>
                      <?php endforeach; ?>                      
                    </table>
                </div>
              </div>
          </div>
        </div>
      </div>
    </section>

    <footer id="footer">
      <p>Copyright RLF, &copy; 2017</p>
    </footer>

    <!-- Modals -->

    <!-- Add Page -->
    <div class="modal fade" id="addPage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form>
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Add Page</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label>Page Title</label>
          <input type="text" class="form-control" placeholder="Page Title">
        </div>
        <div class="form-group">
          <label>Page Body</label>
          <textarea name="editor1" class="form-control" placeholder="Page Body"></textarea>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox"> Published
          </label>
        </div>
        <div class="form-group">
          <label>Meta Tags</label>
          <input type="text" class="form-control" placeholder="Add Some Tags...">
        </div>
        <div class="form-group">
          <label>Meta Description</label>
          <input type="text" class="form-control" placeholder="Add Meta Description...">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </form>
    </div>
  </div>
</div>

<!--  <script>
     CKEDITOR.replace( 'editor1' );
 </script> !-->


  </body>
</html>
