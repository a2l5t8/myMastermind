@extends('layouts.app')

@section('content')
    <div class="card">
        <input id="card-holder-name" type="text">

        <!-- Stripe Elements Placeholder -->
        <div id="card-element"></div>

        <button id="card-button">
            Process Payment
        </button>
    </div>
@endsection

@section('scripts')
    <script src="https://js.stripe.com/v3/"></script>

    <script>
        const stripe = Stripe('pk_test_SPX0lldm5Zjc5uMtVBSELV9o00iEfpLKhm');

        const elements = stripe.elements();
        const cardElement = elements.create('card');

        cardElement.mount('#card-element');

        const cardHolderName = document.getElementById('card-holder-name');
        const cardButton = document.getElementById('card-button');

        cardButton.addEventListener('click', async (e) => {
            const { paymentMethod, error } = await stripe.createPaymentMethod(
                'card', cardElement, {
                    billing_details: { name: cardHolderName.value }
                }
            );

            if (error) {
                alert("something happened during payment process")
            } else {
                alert('DOne !!!!');
            }
        });
    </script>
@endsection
