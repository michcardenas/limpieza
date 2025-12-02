@extends('landing_page.layout')

@section('content')

    <section id="terms-and-conditions" style="padding: 160px 0 100px 0;" class="section">

      <!-- Section Title -->
      <div class="container section-title">
        <h2>Terms and Conditions</h2>
        <p>Last updated: {{ date('F d, Y') }}</p>
      </div><!-- End Section Title -->

      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-10">
            <div class="card shadow-sm">
              <div class="card-body p-5">

                <h4 class="mb-4">1. Agreement to Terms</h4>
                <p class="mb-4">
                  By accessing and using Clean Me's services, you agree to be bound by these Terms and Conditions.
                  If you do not agree with any part of these terms, you may not use our services.
                </p>

                <h4 class="mb-4">2. Services Provided</h4>
                <p class="mb-4">
                  Clean Me provides professional cleaning services for residential and commercial properties.
                  Our services include but are not limited to:
                </p>
                <ul class="mb-4">
                  <li>Regular house cleaning</li>
                  <li>Deep cleaning services</li>
                  <li>Move-in/move-out cleaning</li>
                  <li>Commercial cleaning</li>
                  <li>Specialized cleaning services</li>
                </ul>

                <h4 class="mb-4">3. Booking and Payment</h4>
                <p class="mb-4">
                  <strong>3.1 Booking:</strong> Services must be booked through our website or by contacting our customer service team.
                  All bookings are subject to availability.
                </p>
                <p class="mb-4">
                  <strong>3.2 Payment:</strong> Payment is required at the time of booking. We accept credit cards and other payment methods
                  as indicated on our payment page. All prices are in Australian Dollars (AUD) and include GST.
                </p>
                <p class="mb-4">
                  <strong>3.3 GST:</strong> A 10% Goods and Services Tax (GST) will be added to all services as required by Australian law.
                </p>

                <h4 class="mb-4">4. Cancellation and Rescheduling</h4>
                <p class="mb-4">
                  <strong>4.1 Cancellation:</strong> Cancellations must be made at least 24 hours before the scheduled service time
                  to receive a full refund. Cancellations made within 24 hours of the service may incur a cancellation fee.
                </p>
                <p class="mb-4">
                  <strong>4.2 Rescheduling:</strong> You may reschedule your service up to 12 hours before the scheduled time
                  without any additional charges. Rescheduling within 12 hours may be subject to availability and additional fees.
                </p>

                <h4 class="mb-4">5. Access to Property</h4>
                <p class="mb-4">
                  You agree to provide safe and unobstructed access to all areas requiring cleaning. You must inform us of any
                  potential hazards, security codes, alarm systems, or special access requirements prior to the scheduled service.
                </p>

                <h4 class="mb-4">6. Liability and Insurance</h4>
                <p class="mb-4">
                  Clean Me is fully insured for liability and workers' compensation. However, we are not responsible for:
                </p>
                <ul class="mb-4">
                  <li>Damage to items that are already broken or damaged</li>
                  <li>Stains that cannot be removed despite reasonable efforts</li>
                  <li>Items left in unusual or unsafe locations</li>
                  <li>Damage caused by pets or other third parties during service</li>
                </ul>

                <h4 class="mb-4">7. Quality Guarantee</h4>
                <p class="mb-4">
                  We stand behind the quality of our work. If you are not satisfied with our service, please contact us within
                  24 hours of service completion, and we will arrange to re-clean the areas of concern at no additional charge.
                </p>

                <h4 class="mb-4">8. Privacy and Data Protection</h4>
                <p class="mb-4">
                  We are committed to protecting your privacy. All personal information collected during booking and service
                  is handled in accordance with our Privacy Policy and applicable data protection laws.
                </p>

                <h4 class="mb-4">9. Limitation of Liability</h4>
                <p class="mb-4">
                  To the fullest extent permitted by law, Clean Me's total liability for any claims arising from or related to
                  our services shall not exceed the amount paid for the specific service giving rise to the claim.
                </p>

                <h4 class="mb-4">10. Changes to Terms</h4>
                <p class="mb-4">
                  We reserve the right to modify these Terms and Conditions at any time. Changes will be effective immediately
                  upon posting to our website. Your continued use of our services after changes are posted constitutes acceptance
                  of the modified terms.
                </p>

                <h4 class="mb-4">11. Governing Law</h4>
                <p class="mb-4">
                  These Terms and Conditions are governed by and construed in accordance with the laws of Australia.
                  Any disputes arising from these terms shall be subject to the exclusive jurisdiction of the Australian courts.
                </p>

                <h4 class="mb-4">12. Contact Information</h4>
                <p class="mb-4">
                  If you have any questions about these Terms and Conditions, please contact us at:
                </p>
                <p class="mb-4">
                  <strong>Email:</strong> {{ $layoutConfig->footer_email ?? 'info@cleanme.com' }}<br>
                  <strong>Phone:</strong> {{ $layoutConfig->footer_phone ?? '+61 (XXX) XXX-XXXX' }}
                </p>

                <hr class="my-5">

                <p class="text-center">
                  <a href="{{ route('services.calculator') }}" class="btn btn-primary">
                    <i class="bi bi-arrow-left"></i> Back to Booking
                  </a>
                </p>

              </div>
            </div>
          </div>
        </div>
      </div>

    </section>

@endsection
