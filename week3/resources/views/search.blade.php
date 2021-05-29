@extends('layout')
@section('content')

    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h1 class="display-4">Search</h1>
        {{-- <p class="lead">List Trainers</p> --}}
    </div>

    <div class="container">
        <div class="d-flex justify-content-center">
            <form class="form-inline mt-2 mt-md-0" action="/search" method="GET">
                <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" name="searchinput">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
            
        </div>
        <?php
        if (isset($search)) { ?>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">trainer_id</th>
                        <th scope="col">trainer_name</th>
                        <th scope="col">trainer_email</th>
                        <th scope="col">trainer_phone</th>
                        <th scope="col">company_id</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($trainers as $trainer)
                    <tr>
                        <td>{!! $trainer->trainer_id !!}</td>
                        <td>{!! $trainer->trainer_name !!}</td>
                        <td>{!! $trainer->trainer_email !!}</td>
                        <td>{!! $trainer->trainer_phone !!}</td>
                        <td>{!! $trainer->company_id !!}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="d-flex justify-content-center">
            {{ $trainers->withQueryString()->links() }}
            </div>
        <?php } else {
            echo "products not set";
        }
        ?>
        
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