# ProjectPhase

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional] 
**project_id** | **int** |  | [optional] 
**description** | **string** |  | 
**board** | [**\Spinen\ConnectWise\Clients\Project\Model\ProjectBoardReference**](ProjectBoardReference.md) |  | [optional] 
**status** | [**\Spinen\ConnectWise\Clients\Project\Model\PhaseStatusReference**](PhaseStatusReference.md) |  | [optional] 
**agreement** | [**\Spinen\ConnectWise\Clients\Project\Model\AgreementReference**](AgreementReference.md) |  | [optional] 
**opportunity** | [**\Spinen\ConnectWise\Clients\Project\Model\OpportunityReference**](OpportunityReference.md) |  | [optional] 
**parent_phase** | [**\Spinen\ConnectWise\Clients\Project\Model\ProjectPhaseReference**](ProjectPhaseReference.md) |  | [optional] 
**wbs_code** | **string** |  | [optional] 
**bill_time** | **string** |  | [optional] 
**bill_expenses** | **string** |  | [optional] 
**bill_products** | **string** |  | [optional] 
**mark_as_milestone_flag** | **bool** |  | [optional] 
**notes** | **string** |  | [optional] 
**deadline_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**bill_separately_flag** | **bool** |  | [optional] 
**billing_method** | **string** | billingMethod is required if the phase billSeparatelyFlag is true | [optional] 
**scheduled_hours** | **double** |  | [optional] 
**scheduled_start** | **string** |  | [optional] 
**scheduled_end** | **string** |  | [optional] 
**actual_hours** | **double** |  | [optional] 
**actual_start** | **string** |  | [optional] 
**actual_end** | **string** |  | [optional] 
**budget_hours** | **double** |  | [optional] 
**location_id** | **int** |  | [optional] 
**business_unit_id** | **int** |  | [optional] 
**hourly_rate** | **double** |  | [optional] 
**billing_start_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**bill_phase_closed_flag** | **bool** | This phase can only be billed after it has been closed | [optional] 
**bill_project_closed_flag** | **bool** | This phase can only be billed after the project has been closed | [optional] 
**downpayment** | **double** |  | [optional] 
**po_number** | **string** |  | [optional] 
**po_amount** | **double** |  | [optional] 
**estimated_time_cost** | **double** |  | [optional] 
**estimated_expense_cost** | **double** |  | [optional] 
**estimated_product_cost** | **double** |  | [optional] 
**estimated_time_revenue** | **double** |  | [optional] 
**estimated_expense_revenue** | **double** |  | [optional] 
**estimated_product_revenue** | **double** |  | [optional] 
**_info** | [**\Spinen\ConnectWise\Clients\Project\Model\Metadata**](Metadata.md) | Metadata of the entity | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


