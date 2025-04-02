<?php

namespace App\Filament\Widgets;

use App\Models\Billing;
use App\Models\Expense;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class SalesOverview extends BaseWidget
{
    protected static ?int $sort = 0;
    protected function getStats(): array
    {
        return [
            $this->getTotalSalesStat(),
            $this->getTotalExpensesStat(),
            $this->getTotalProfitStat(),
        ];
    }

    protected function getTotalSalesStat(): Stat
    {
        $totalSales = Billing::query()->sum('billing_amount');

        return Stat::make('Total Sales', number_format($totalSales, 2))
            ->description('Total sales amount')
            ->chart([/* Add chart data here if needed */])
            ->color('success');
    }
    protected function getTotalExpensesStat(): Stat
    {
        $totalExpenses = Expense::query()->sum('expense_amount');

        return Stat::make('Total Expenses', number_format($totalExpenses, 2))
            ->description('Total expenses amount')
            ->chart([/* Add chart data here if needed */])
            ->color('danger');
    }
    protected function getTotalProfitStat(): Stat
    {
        $totalSales = Billing::query()->sum('billing_amount');
        $totalExpenses = Expense::query()->sum('expense_amount');
        $totalProfit = $totalSales - $totalExpenses;

        return Stat::make('Total Revenue', number_format($totalProfit, 2))
            ->description('Total revenue amount')
            ->chart([/* Add chart data here if needed */])
            ->color('primary');
    }
}
