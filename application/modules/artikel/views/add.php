    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Basic Card Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Form Add Article</h6>
            </div>
            <div class="card-body">
            <form action="<?= base_url()?>artikel/save_artikel" method="POST">
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" class="form-control" name="title" id="title" placeholder="Enter title" value="<?= set_value('title')?>">
                    <?= form_error('title','<small class="text-danger pl-3">','</small>')?>
                </div>
                <div class="form-group">
                    <label>Category</label>
                    <input type="text" class="form-control" name="category" id="category" placeholder="Enter category" value="<?= set_value('category')?>">
                    <?= form_error('category','<small class="text-danger pl-3">','</small>')?>
                </div>
                <div class="form-group">
                    <label>Image Article</label>
                    <input type="file" class="form-control-file" id="image" name="image">
                    <?= form_error('image','<small class="text-danger pl-3">','</small>')?>
                </div>
                <div class="form-group">
                    <label>Detail Article</label>
                    <textarea class="form-control" id="detail" name="detail"></textarea>
                    <?= form_error('detail','<small class="text-danger pl-3">','</small>')?>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->