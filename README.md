# Custom Pulse Metric Recording and Display

So! This repository is a sample one. You can use it as a reference to this [article right here](https://fly.io/laravel-bytes/custom-laravel-pulse-cards/).

**Files to care about**

1. [`app/Livewire/RequestsReceived.php`](https://github.com/KTanAug21/example-custom-pulse-card/blob/master/app/Livewire/RequestsReceived.php) - Livewire component extending Pulse's Card component, and retrieves `machine_requests` metric from the Pulse tables
2. [`resources/views/livewire/requests-received.blade.php`](https://github.com/KTanAug21/example-custom-pulse-card/blob/master/resources/views/livewire/requests-received.blade.php) - Copy paste of Laravel Pulse's sample custom card. Tweaked to display `$machines` count information into a table
3. [`app/Http/Middleware/RecordRequest.php`](https://github.com/KTanAug21/example-custom-pulse-card/blob/master/app/Http/Middleware/RecordRequests.php) - Global middleware that records incoming requests into Pulse's tables using Pulse's available methods.

