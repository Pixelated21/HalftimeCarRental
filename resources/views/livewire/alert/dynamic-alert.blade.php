<div x-data="{alert:false}"
     x-on:alert-toggle.window="alert = true,
      setTimeout ( () => {alert = false} ,5000)">
    <x-alerts.dynamic-alerts alphName="alert" :alert="$alert" :type="$type" :title="$title"
                             class="z-20 top-20 right-0 rounded-l-lg"/>
</div>
