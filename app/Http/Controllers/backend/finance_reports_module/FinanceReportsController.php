<?php

namespace App\Http\Controllers\backend\finance_reports_module;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FinanceReportsController extends Controller
{
    public function dailyCollection()
    {
        return view('backend.finance_reports_module.daily_collection');
    }
    public function feesCollection()
    {
        return view('backend.finance_reports_module.fees_collection');
    }
    public function studentsDues()
    {
        return view('backend.finance_reports_module.student_dues');
    }
    public function studentsLedger()
    {
        return view('backend.finance_reports_module.student_ledger');
    }
    public function studentsWaiverReport()
    {
        return view('backend.finance_reports_module.student_waiver_report');
    }
    public function accountsLedger()
    {
        return view('backend.finance_reports_module.account_ledger');
    }
    public function trialBalance()
    {
        return view('backend.finance_reports_module.trial_balance');
    }
    public function cashBook()
    {
        return view('backend.finance_reports_module.cash_book');
    }
    public function bankBook()
    {
        return view('backend.finance_reports_module.bank_book');
    }
    public function balanceSheet()
    {
        return view('backend.finance_reports_module.balance_sheet');
    }
    public function payableReceivable()
    {
        return view('backend.finance_reports_module.payable_receivable');
    }
}
