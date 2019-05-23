<? $input_b = $_GET['ORDER']?>
<nav class="navbar navbar-light bg-light">
    <form class="" method="get">
        <input name="search" class="form-control mr-sm-2" type="search" placeholder="Search"
               value="<?=$search?>">
        <br>
            <input class="ml-1 form-check-input" type="radio" name="ORDER" id="exampleRadios1" value="A" <?=$input_b=='A'?'checked':''?>>

        <input type="submit" name="formSubmit" value="Submit" />

        <label class="ml-3 form-check-label" for="exampleRadios1">
                По алфавиту вверх
            </label>

        <br>

        <input class="ml-1 form-check-input" type="radio" name="ORDER" id="exampleRadios2" value="B" <?=$input_b=='B'?'checked':''?>>
            <label class="ml-3 form-check-label" for="exampleRadios2">
               По алфавиту вниз
            </label>

        <br>

        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
</nav>
