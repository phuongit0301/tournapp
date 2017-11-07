@extends ('layout.master')

@section ('title')
Create Competition
@endsection

@section ('step-button')
<div class=" step-button-container">
  <div class="wrapper-menu-step">
    <ul class="menu-step-button">
      <li class="active"><a href="#">1. Set Up</a></li>
      <li class="active"><a href="#">2. Categories</a></li>
      <li><a href="#">3. Signup</a></li>
      <li><a href="#">4. Stages</a></li>
      <li><a href="#">5. Draws</a></li>
      <li><a href="#">6. Session Planning</a></li>
      <li><a href="#">7. Session Managing</a></li>
    </ul>
  </div>
</div>
@endsection
@section ('content')
<div class="col-sm-12 col-md-12 col-lg-12 competition-category-chart">
  <div class="chart-define">
    <ul class="category-chart" style="display: none;">
      <li>root-category
        <ul>
          <li>MASS
            <ul>
              <li>JUNIORS
                <ul>
                  <li>MIXED
                    <ul>
                      <li>DOUBLES
                        <ul>
                          <li>MIXED DOUBLES YOUTH 12</li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li>SENIORS</li>
            </ul>
          </li>
          <li>VERMOUNT
            <ul>
              <li>JUNIORS</li>
              <li>SENIORS</li>
            </ul>
          </li>
        </ul>
      </li>
    </ul>
  </div>
  <div class="chart">
    
  </div>
</div>

@endsection

@section ('modals')

@endsection
