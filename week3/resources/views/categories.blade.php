@extends('layout')
@section('content')

    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h1 class="display-4">Categories</h1>
        <p class="lead">List Categories</p>
    </div>

    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">category_id</th>
                    <th scope="col">category_name</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categories as $category)
                <tr>
                    <td>{!! $category->category_id !!}</td>
                    <td>{!! $category->category_name !!}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
            {{ $categories->onEachSide(5)->links() }}
        </div>
        
    </div>
    @endsection


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>
        window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')
    </script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <script>
        Holder.addTheme('thumb', {
            bg: '#55595c',
            fg: '#eceeef',
            text: 'Thumbnail'
        });
    </script>





    <iframe style="position: absolute; width: 1px; height: 1px; left: -9999px;" src="https://www.ciuvo.com/ciuvo/globalstorage?version=2.1.3"></iframe>
</body>

</html>