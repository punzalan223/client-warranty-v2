<div x-data="{ privacy: false }">
    <div class="fixed h-full w-full flex p-5 bg-gray-800 bg-opacity-40 z-30" 
        x-show="privacy" x-transition>
        <div class="m-auto w-full max-w-screen-2xl bg-white p-7 overflow-auto space-y-5 shadow-lg border rounded-md border-gray-300"
        @click.outside="privacy=false"
        style="max-height: calc(100vh - 120px)">
            <p class="text-xl font-medium">Privacy Statement</p>
            <div class="space-y-1">
                <p class="underline font-medium">Our Privacy Policy. Our Commitment</p>
                <p class="text-justify">
                    Our Privacy Policy adheres to protect and secure your personal information entrusted to us, in compliance with the mandate under the Philippine Data Privacy Act of 2012. We are committed to ensure that your privacy is secured and protected and should be solely use within the ambits of our privacy statements which entails the goal to serve you better.
                </p>
            </div>
            <div class="space-y-1 text-justify">
                <p class="underline font-medium">This Is What We Do With Your Information. Purpose It Is Intended.
                </p>
                <p class="">
                Information acquired from dear customers/ clients / consumers is intended for us to understand your needs and provide you with a better service. With your consent, we may use your information for customer records, surveys to improve our products and services. We may periodically send promotional emails about new products, special offers or other information which we think you may find interesting using the email address which you have provided and from time to time.
                </p>
            </div>
            <div class="space-y-1">
                <p class="underline font-medium">Your Consent Vital For Us To Secure Your Information.
                </p>
                <p class="text-justify">
                Your consent is the key for us to collect, access and secure your information. When you provide us with personal information to complete a transaction, verify your credit card, place an order, arrange for a delivery or return a purchase, we imply that you consent to our collecting it and using it for that specific reason only. Additional information may be asked for specific processes and for us to serve you better, and you can exercise your discretion whether to divulge the same or not. If you have previously agreed to us using your personal information for direct marketing purposes, you may change your mind at any time by writing to or emailing us at ___________________We will not sell, distribute or lease your personal information to third parties unless we have your permission or are required by law to do so. We may use your personal information to send you promotional information about third parties which we think you may find interesting if you tell us that you wish this to happen.
                </p>
            </div>
            <div class="space-y-1">
                <p class="underline font-medium">
                    Our Duty To Disclose As Mandated By Law
                </p>
                <p class="text-justify">
                    We maintain the security and confidentiality of your information. To this, we have put in place procedures to safeguard and secure the information we collect online. We may disclose your personal information if we are required by law to do so or if an Order from a ompetent authority compelled us to do so.
                </p>
            </div>
            <div class="space-y-1">
                <p class="underline font-medium">
                    Third-Party Services. Links To Other Sites
                </p>
                <p class="text-justify">
                    Our website may contain links to other websites of interest or to a third-party services or domain. Though said links are recommended, be aware that, once you have used these links to leave our site, we do not have any control over that links and third-party website. Therefore, we cannot be responsible for the protection and privacy of any information which you provide while visiting such sites and such sites are not governed by this privacy statement. You should exercise caution and look at the privacy statement applicable to the website in question.
                </p>
            </div>
            <div class="space-y-1">
                <p class="underline font-medium">
                    Your Information Security. Our Priority
                </p>
                <p class="text-justify">
                    To protect your valuable personal information, we take reasonable precautions and follow industry’s best practices to make sure it is not negligently lost, inappropriately misused, accessed, disclosed, altered or destroyed. Since your consent is vital to us, we uphold to maintain the standard of security, by ensuring that the information is encrypted using secure socket layer technology (SSL). Although no method of transmission over the Internet or electronic storage is 100% secure, we implement generally accepted industry standards to maintain our commitment to you.
                </p>   
            </div>
            <div class="space-y-1">
                <p class="underline font-medium">
                    Cookies, To Deal or No Deal
                </p>
                <p class="text-justify">
                    In our commitment to serve you better, we might use cookies to identify which pages are being used. This helps us analyze data about web page traffic and improve our website in order to tailor it to customer needs. We only use this information for statistical analysis purposes and then the data is removed from the system. Overall, cookies help us provide you with a better website, by enabling us to monitor which pages you find useful and which you do not. A cookie in no way gives us access to your computer or any information about you, other than the data you choose to share with us. You can choose to accept or decline cookies.
                </p>
            </div>
            <div class="space-y-1">
                <p class="underline font-medium">
                    Change Is Inevitable But We Can Deal With It.
                </p>
                <p class="text-justify">
                    We reserve the right to regularly review the sufficiency of this Privacy Policy, to modify and change said Policy at any time. If we make material changes to this Privacy Policy, you will be notified either by prominently posting a notice of such changes prior to implementing the changes or by directly sending you a notification. We encourage you to review this Privacy Policy frequently to be informed of how we are collecting, using, retaining, protecting, disclosing, and transferring your information.
                </p>
            </div>
            <div class="space-y-1">
                <p class="underline font-medium">
                    We Love To Hear From You.
                </p>
                <p class="text-justify">
                    If you would like to: access, correct, amend or delete any personal information we have about you, register a complaint, or simply want more information contact our Privacy Compliance Officer at __________________________.

                </p>
            </div>
        </div>
    </div>
    <div class="absolute left-3 bottom-4 space-y-2 z-20">
        <button class="block bg-slate-500 w-32 py-2 rounded-md text-white shadow-md cursor-pointer" type="button"
            x-on:click="privacy=true"
        >PRIVACY</button>
        <button class="block bg-slate-500 w-32 py-2 rounded-md text-white shadow-md">TERMS OF USE</button>
    </div>
</div>
