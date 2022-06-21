<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>bs4 card widget - Bootdey.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />
{{--  <div class="col-lg-12" align="center"> --}}
<div class="container" >


<div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <h2 class="card-title">Reports</h2>
            <form class="form-inline" method="POST">
                @csrf
                <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Preference</label>
                <select class="custom-select my-1 mr-sm-2" name="range" id="inlineFormCustomSelectPref">
                  <option selected>Select  time frame</option>
                  <option value="weekly">One week</option>
                  <option value="monthly">One Month</option>
                </select>
                <button type="submit" class="btn btn-primary my-1">Search</button>
              </form>
          </div>
      </div>
    </div>
</div>
@yield('content')

</div>

<style type="text/css">


</style>

<script type="text/javascript">


</script>
</body>
</html>
