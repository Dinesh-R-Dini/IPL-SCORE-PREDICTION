<!DOCTYPE html>
<html>
    <style>
        .foot {
                font-family: cursive;
                font-size: 10px;
                align-content: center;
        }
        .last {
                font-size: 50px;
                color: rgb(25, 25, 241);
        }
        .result {
            background-color: black;
            margin: auto;
            width: 35%;
            color: cornsilk;
            border: 1px solid cornsilk;
        }
        html {
                background-image: url(https://source.unsplash.com/user/jackie/likes/1600x900)
        }
        .container {
                background-color: rgba(201, 201, 221, 0.7);
        }
    </style>
    <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">

            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" 
            integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    </head>
    <div class="card text-center">
        <div class="card-header">
          <h2>IPL Match Predictor</h2>  
        </div>
       
      </div>
    <div class="container">
            <form action="{{ url_for('main') }}" method="POST">
            <fieldset>
                <legend>Input Values:</legend>
                <div class="form-group">
                            <label for="exampleFormControlSelect1">City</label>
                            <select name="city" class="form-control" id="exampleFormControlSelect1">
                              <option>Mumbai</option>
                              <option>Delhi</option>
                              <option>Bangalore</option>    
                              <option>Chennai</option>
                              <option>Kolkata</option>
                              <option>Pune</option>
                              <option>Hyderabad</option>
                              <option>Chandigarh</option>
                              <option>Jaipur</option>
                              <option>Kochi</option>
                              <option>Jaipur</option>
                              <option>Dharmasala</option>
                              <option>Visakhapatnam</option>
                            </select>
                </div>
                <div class="form-group">
                        <label for="exampleFormControlSelect1">Home Team</label>
                        <select name="Home" class="form-control" id="exampleFormControlSelect1">
                          <option>Mumbai Indians</option>
                          <option>Delhi Capitals</option>
                          <option>Sunrisers Hyderabad</option>
                          <option>Royal Challengers Bangalore</option>    
                          <option>Chennai Super Kings</option>
                          <option>Kolkata Knight Riders</option>
                          <option>Rajasthan Royals</option>
                          <option>Sunrisers Hyderabad</option>
                          <option>Kings XI Punjab</option>
                        </select>
                </div>
                <div class="form-group">
                        <label for="exampleFormControlSelect1">Away Team</label>
                        <select name="Away" class="form-control" id="exampleFormControlSelect1">
                          <option>Delhi Capitals</option>
                          <option>Mumbai Indians</option>
                          <option>Sunrisers Hyderabad</option>
                          <option>Royal Challengers Bangalore</option>    
                          <option>Chennai Super Kings</option>
                          <option>Kolkata Knight Riders</option>
                          <option>Rajasthan Royals</option>
                          <option>Sunrisers Hyderabad</option>
                          <option>Kings XI Punjab</option>
                        </select>
                </div>
                <div class="form-group">
                        <label for="exampleFormControlSelect1">Toss Winner</label>
                        <select name="toss_winner" class="form-control" id="exampleFormControlSelect1">
                          <option>Home Team</option>
                          <option>Away Team</option>
                        </select>
                </div>
                <div class="form-group">
                        <label for="exampleFormControlSelect1">Toss Decision</label>
                        <select name="toss_decision" class="form-control" id="exampleFormControlSelect1">
                          <option>bat</option>
                          <option>field</option>
                        </select>
                </div>
                <div class="form-group">
                        <label for="exampleFormControlSelect1">Venue</label>
                        <select name="venue" class="form-control" id="exampleFormControlSelect1">
                          <option>M Chinnaswamy Stadium</option>
                          <option>Wankhede Stadium</option>
                          <option>Feroz Shah Kotla</option>    
                          <option>Punjab Cricket Association IS Bindra Stadium, Mohali</option>
                          <option>Eden Gardens</option>
                          <option>Punjab Cricket Association Stadium, Mohali</option>
                          <option>MA Chidambaram Stadium, Chepauk</option>
                          <option>Maharashtra Cricket Association Stadium</option>
                          <option>Rajiv Gandhi International Stadium, Uppal</option>
                          <option>Sawai Mansingh Stadium</option>
                          <option>Dr. Y.S. Rajasekhara Reddy ACA-VDCA Cricket Stadium</option>
                        </select>
                </div>

                <button type="submit" class="btn btn-primary">Predict</button>
            </fieldset>
            </form>
            <br>
            <div class="result" align="center">
                    {% if result %}
                        {% for variable, value in original_input.items() %}
                            <b>{{ variable }}</b> : {{ value }}
                        {% endfor %}
                        <br>
                        <br> Predicted Winner:
                           <p class="last">{{ result }}</p>
                    {% endif %}
            </div>    
        </div>
        <br>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->

    </div>
    </div>
<!-- Footer -->
</html>