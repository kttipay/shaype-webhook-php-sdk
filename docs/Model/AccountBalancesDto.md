# # AccountBalancesDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**total_balance** | [**\Shaype\Webhook\Model\CurrencyAmount**](CurrencyAmount.md) | Total balance of an account (the amount of money in the account including overdraft limit and funds in stacks). | [optional]
**held_balance** | [**\Shaype\Webhook\Model\CurrencyAmount**](CurrencyAmount.md) | Total amount of card holds that haven’t settled yet. | [optional]
**locked_balance** | [**\Shaype\Webhook\Model\CurrencyAmount**](CurrencyAmount.md) | The amount locked for other purposes (e.g. creditor seeking judgment against bank client, or unpaid taxes or fines). | [optional]
**stacks_balance** | [**\Shaype\Webhook\Model\CurrencyAmount**](CurrencyAmount.md) | How much money in the account is currently allocated to stacks. | [optional]
**available_balance** | [**\Shaype\Webhook\Model\CurrencyAmount**](CurrencyAmount.md) | Total balance minus funds held and funds locked, minus funds allocated to stacks (effectively what the customer can spend right now). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
