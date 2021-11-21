<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
       @include('partials._head')
    </head>
    <body>
    <form action="{{ route('bet') }}" method="post" id="betform">
            @csrf
            <label for="player_id">Player id</label>
            <input type="text" id="player_id" name="player_id"> <br> <br>
            <label for="stake_amount">Stake_amount</label> 
            <input type="text" id="stake_amount" name="stake_amount"> <br> <br>
            <label for="selections_wrapper">Selections</label>
            <div id="selections_wrapper" class="selections_wrapper"> 
                <input type="text" name="id[]" placeholder="id" value=""/>
                <input type="text" name="odds[]" placeholder="odds" value=""/>
                <a type="Button" 
                   href="javascript:void(0);" 
                   class="add_button button" 
                   title="Add field" 
                   style="width: 45px;">
                   Add
                </a> <br> <br>
            </div>
            <!-- <input type="text" id="selections" name="selections"><br> -->
            
            <br>
            <!-- <textarea name="betData" rows="4" cols="50" form="betform" placeholder="Enter data here..." required></textarea>
            <br><br> -->
            <input type="submit" value="Bet" />
        </form>
    </body>
    
</html>