@extends('layouts.navadmin')
@section('content')

<div id="side-bar-admin"></div>

<div class="container1">
    <div class="container">

        <h2>Approval Requests</h2>

        <table class="approval-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Request 1</td>
                    <td>Post Approval</td>
                    <td>Pending</td>
                    <td>
                        <button class="btn-approve">Approve</button>
                        <button class="btn-reject">Reject</button>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Request 2</td>
                    <td>Approval request description 1</td>
                    <td>Deleted</td>
                    <td>
                        <button class="btn-approve">Approve</button>
                        <button class="btn-reject">Reject</button>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Request 3</td>
                    <td>Approval request description 1</td>
                    <td>Canceled</td>
                    <td>
                        <button class="btn-approve">Approve</button>
                        <button class="btn-reject">Reject</button>
                    </td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Request 4</td>
                    <td>Approval request description 1</td>
                    <td>Pending</td>
                    <td>
                        <button class="btn-approve">Approve</button>
                        <button class="btn-reject">Reject</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<div class="container2">
    <div class="contain">
            <h2>Report Notifications</h2>
            <ul class="notification-list">
                <li class="notification">
                    <div class="notification-content">
                        <strong>Report 1:</strong> New report submitted.
                    </div>
                    <div class="notification-actions">
                        <button class="btn-view">View</button>
                        <button class="btn-dismiss">Dismiss</button>
                    </div>
                </li>
                <li class="notification">
                    <div class="notification-content">
                        <strong>Report 2:</strong> Report updated.
                    </div>
                    <div class="notification-actions">
                        <button class="btn-view">View</button>
                        <button class="btn-dismiss">Dismiss</button>
                    </div>
                </li>
                <!-- Add more notifications as needed -->
            </ul>
        </div>
</div>




<style>

    .container1{
        position: absolute;
        width: 56rem;
        max-height: 52rem;
        top: 6.5rem;
        left: 23rem;
    }
    .container2{
        position: absolute;
        width: 40rem;
        max-height: 52rem;
        top: 6.5rem;
        left: 79rem;
    }
    .line-md-switch-off {
        background-image: url(/img/toggle-on.png);
    }
    .box4 .group div:nth-child(3) {
        /* border: 0.5px solid white; */
        background: #ffffff42;
    }

    .container {
        background-color: #ffffff66;        
        max-width: 800px;
        margin: 20px auto;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }

    h2 {
        font-size: 24px;
        margin-bottom: 20px;
        text-align: center;
        color: white;
        text-shadow: -1px 0 black, 1px 0 black, 0 -1px black, 0 1px black;
    }

    .approval-table {
        width: 100%;
        border-collapse: collapse;
    }

    .approval-table th,
    .approval-table td {
        /* border: 1px solid black; */
        padding: 8px;
        text-align: left;
    }

    .approval-table th {
        background-color: #000000;
        font-weight: bold;
        color: white;
    }

    /* .approval-table tbody tr:nth-child(even) {
        background-color: #f2f2f2;
    } */


    .btn-approve {
        border: 0.1px solid #068a06 !important;
    }

    .btn-approve,
    .btn-reject {
        padding: 6px 12px;
        background-color: #4CAF50;
        color: black;
        border: none;
        cursor: pointer;
        border-radius: 5px;
    }

    .btn-approve:hover,
    .btn-reject:hover {
        background-color: #45a049;
    }

    .btn-reject {
        background-color: #f44336;
        border: 0.1px solid #9a0707;
    }

    .btn-reject:hover {
        background-color: #d32f2f;
    }

    tr td:nth-child(5) {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 1rem;
    }
    tr th:nth-child(5) {
        text-align: center;
    }

    .contain {
        background-color: #ffffff66;
        max-width: 800px;
        height: 51.313rem;
        margin: 20px auto;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }

    h2 {
        font-size: 24px;
        margin-bottom: 20px;
    }

    .notification-list {
        list-style-type: none;
        padding: 0;
    }

    .notification {
        display: flex;
        align-items: center;
        justify-content: space-between;
        background-color: #ffffff66;
        padding: 10px;
        margin-bottom: 10px;
        border-radius: 5px;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
    }

    .notification-content {
        font-weight: bold;
    }

    /* .notification-actions {
        margin-top: 10px;
    } */

    .btn-view,
    .btn-dismiss {
        padding: 6px 12px;
        background-color: #007bff;
        color: white;
        border: none;
        cursor: pointer;
        border-radius: 5px;
        margin-right: 5px;
    }

    .btn-view:hover,
    .btn-dismiss:hover {
        background-color: #0056b3;
    }

</style>

@stop