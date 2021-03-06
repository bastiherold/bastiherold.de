@extends('admin.layouts.page')

@section('additional-styles')
<style>
  .main-container{
      
    background: #d53369; /* fallback for old browsers */
    background: -webkit-linear-gradient(to left, #d53369 , #cbad6d); /* Chrome 10-25, Safari 5.1-6 */
    background: linear-gradient(to left, #d53369 , #cbad6d); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            
        }
    .highlight  {
        width: 600px;
        color: white;
        background: rgba(0, 0, 0, 0.26);
        border-radius: 10px;
        padding: 3%;
        
      }
        
    .highlight img {
        
        float: left;
        width: 100px;
        height: 100px; 
        margin: 10px;
        }
        
    .highlight ul {
        list-style-image: url('http://icons.iconarchive.com/icons/yusuke-kamiyamane/fugue/16/tick-small-icon.png');
        margin-left: 1%;
        float: left; 
      clear: right
      }
      
  .highlight button {
     margin-left: 1%;
      float: right;
      }
  
  .highlight h1,h2,h3,h4,h5,h6 {
      padding-bottom: 2%;
    border-bottom: 2px dashed rgba(255, 255, 255, 0.41);
      font-size:20px;
      text-align : center;
      text-transform: uppercase;
      }
      
  .highlight p {
      text-align: justify;
      }
</style>
@endsection

@section('content')
<div class=" highlight" style="margin: 20px auto;">
  <h2>{{ $message->senderName }}</h2>
    <div class="row">
      <img src ="http://davidnaylor.org/temp/thunderbird-logo-200x200.png" /> 
      <ul>
        <li>Lorem Ipsum.</li>  
        <li>Lorem Ipsum.</li>  
        <li>Lorem Ipsum.</li>  
        <li>Lorem Ipsum.</li>  
      </ul>
    </div>
    <div class="row">
      <p>
        {{ $message->body }}
      </p>
      <button class="btn btn-primary">Reply</button>
      <button class="btn btn-warning">Back</button>
    </div>
</div>
@endsection
