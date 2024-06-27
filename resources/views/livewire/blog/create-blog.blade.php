<div>
<div id="main" style="margin-top: 80px;">

    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Create Post</h4>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <div>
                        <div class="row justify-content-center">
                            <div class="col-12">
                                <div class="card">
                                    
                                    <div class="card-body">
                    
                                        <form wire:submit.prevent="save" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label for="title">Title</label>
                                                <input type="text" name="title" wire:model="title" class="form-control">
                                                @error('title')<span class="text-danger">{{ $message }}</span>@enderror
                                            </div>
                    
                                           
                                            <div class="form-group">
                                                <label for="author">Author</label>
                                                <input type="text" name="author" wire:model="author" class="form-control">
                                                @error('author')<span class="text-danger">{{ $message }}</span>@enderror
                                            </div>
                    

                                            <div class="form-group">
                                                <label for="body">Body</label>
                                                <textarea name="body" class="form-control" wire:model="body" rows="5"></textarea>
                                                @error('body')<span class="text-danger">{{ $message }}</span>@enderror
                                            </div>
                    
                                            <div class="form-group">
                                                <label for="image">Image</label>
                                                <input type="file" name="image" class="custom-file" wire:model="image">
                                                @error('image')<span class="text-danger">{{ $message }}</span>@enderror
                                            </div>
                    
                                            <div class="text-center">
                                                <input type="submit" name="save" value="Add Post" class="btn btn-success">
                                            </div>
                                        </form>
                    
                    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
    <footer>
        <div class="footer clearfix mb-0 text-muted">
            <div class="float-start">
                <p>2021 &copy; Soeng Souy</p>
            </div>
            <div class="float-end">
                <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a
                href="http://soengsouy.com">Soeng Souy</a></p>
            </div>
        </div>
    </footer>
</div>
            </div>