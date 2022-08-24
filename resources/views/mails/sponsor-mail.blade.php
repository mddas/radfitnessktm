<h4>New Sponsor Request For Child - {{$data['child-name']?$data['child-name']:''}}</h4>

@if($data['image'])
    <img src="{{asset('uploads/banner_image/'.$data['image'])}}" width="100px"/><br>
@endif

Child To Be Sponsored : {{$data['child-name']?$data['child-name']:''}} <br>
@if($data['custom_amount'])
    Donation : ${{$data['custom_amount']?$data['custom_amount']:''}}<br>

@else
    Donation : {{$data['amount']?$data['amount']:''}} <br>
    @endif
{{$data['recurring_monhtly']?$data['recurring_monhtly']:'' }}





{{--Contact_person : {{$data['contact_person']?$data['contact_person']:''}}<br>
Company_name : {{$data['company_name']?$data['company_name']:''}}<br>
Address : {{$data['address']?$data['address']:''}} <br>
Country : {{$data['country']?$data['country']:''}} <br>
Email : {{$data['email']?$data['email']:''}} <br>
Phone : {{$data['phone']?$data['phone']:''}} <br>
Fax : {{$data['fax']?$data['fax']:''}} <br>
Subject : {{$data['subject']?$data['subject']:''}} <br>
Message : {{$data['message']?$data['message']:''}}<br>--}}
